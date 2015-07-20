<?php

class AdminController extends BaseController {

    public function __construct()
    {
        $this->beforeFilter('auth');
    }

    protected function setupLayout()
    {
        $type_page=Type::lists('name', 'id');

        View::share([
            'type_page'=>$type_page,
        ]);
    }

    public function getIndex()
    {

        $view = array(
         );
        return View::make('admin.index', $view);
    }



    public function getContent($type_id='content', $id='edit'){

        if($type_id=='content' && $id=='edit'){
            $posts = Type::orderBy('created_at', 'desc')->get();
            return View::make('admin.content')->with('posts', $posts);
        }

        $posts = Post::where('type_id', '=', $type_id)->where('parent', '=', '0')->orderBy('created_at', 'desc')->get();
        $posts_child = Post::where('type_id', '=', $type_id)->where('parent', '!=', '0')->orderBy('created_at', 'desc')->get();

        $view = array(
            'posts' => $posts,
            'posts_child' => $posts_child,
            'type_id' => $type_id,
         );

        $templates = array(
                // 'page-img-text'=>'Картинка-текст',
                // 'page-menu-title'=>'Меню-название',
                // 'page-text-data'=>'Текст-дата',
                // 'page-rate'=>'Тарифы',
                'page'=>'Текст',
        );


        if($type_id=='type' && $id=='add'){
              $view['templates'] = $templates;
            return View::make('admin.post-type', $view);
        }

        if($id=='edit'){
            $post = Type::where('id', $type_id)->first();

            $view['row'] = $post;
            $view['templates'] = $templates;
            return View::make('admin.post-type', $view);
        }

        else if($id){
            $post = Post::find($id);

            //$parent = array();
            $parent[0]= '';
            foreach ($posts as $value) {
                if($value->id!=$id){$parent[$value['id']]= $value['name'];}
            }
            $view['parent'] = $parent;
            $view['row'] = $post;

            return View::make('admin.posts', $view);
        }
    }

    public function postContent($type_id, $id='add')
        {
            $all = Input::all();
             //var_dump($all); die();
            if(!$all['slug']) {$all['slug'] = BaseController::ru2Lat($all['name']);}
            $rules = array(
                'name' => 'required|min:2|max:255',
                'title' => 'required|min:3|max:255',
                'slug'  => 'required|min:4|max:255|alpha_dash',
                //'slug'  => 'required|min:4|max:255|alpha_dash|unique:posts,slug,post_id'.$post_id,
            );
            $validator = Validator::make($all, $rules);
            if ( $validator -> fails() ) {
                return Redirect::to('/admin/content/'.$type_id.'/'.$id)
                        ->withErrors($validator)
                        ->withInput()
                        ->with('error', 'Ошибка');
            }
            if(is_numeric($id))   {
                  $post = Post::find($id);
            }
            else {
                $post = new Post();
            }
            $post->type_id = $all['type_id'];
            $post->name = $all['name'];
            $post->title = $all['title'];
            $post->slug = $all['slug'];

            // $post->preview = $all['preview'];
            $post->text = $all['text'];
            $post->parent = $all['parent'];
            $post->status = isset($all['status'])?true:false;
            // $post->noindex = isset($all['noindex'])?true:false;
            $post->description = $all['description'];
            $post->keywords = $all['keywords'];

            if(isset($all['image'])){
                $full_name = Input::file('image')->getClientOriginalName();
                $filename=$full_name;
                $path = 'upload/image/';
                Input::file('image')->move($path, $filename);
                $post->image = $path.$filename;
            }

            $post->save();

            return Redirect::to('/admin/content/'.$all['type_id'].'/'.$id)
                    ->with('success', 'Изменения сохранены');
        }

    public function postType($type_id)
        {
            $all = Input::all();
            $rules = array(
                'name' => 'required|min:2|max:255',
                'type' => 'required|min:3|max:255',
            );
            $validator = Validator::make($all, $rules);
            if ( $validator -> fails() ) {
                return Redirect::to('/admin/content/'.$type_id)
                        ->withErrors($validator)
                        ->withInput()
                        ->with('error', 'Ошибка');
            }
            if(is_numeric($type_id))   {
                  $post = Type::find($type_id);
            }
            else {
                $post = new Type();
            }
            $post->type = $all['type'];
            $post->name = $all['name'];
            $post->template = $all['template'];
            $post->title = $all['title'];
            $post->text = $all['text'];
            $post->status = isset($all['status'])?true:false;

            $post->save();

            return Redirect::to('/admin/content/'.$type_id)
                    ->with('success', 'Изменения сохранены');
        }
//добавление и редактирование тарифов интернет
    public function getPostRateInet() {

        $type_id=Type::where('type', 'rate')->first()->id;
        $posts = Post::where('type_id', '=', $type_id)->where('parent', '=', '0')->orderBy('created_at', 'desc')->get();
        $posts_child = Post::where('type_id', '=', $type_id)->where('parent', '!=', '0')->orderBy('created_at', 'desc')->get();

        $inet = Rate::where('type', 'inet')->first();
        $inetOption = Rate::where('type', 'inetOption')->orderBy('position', 'asc')->get();
        $row = array(
            'inet'=>json_decode($inet->description),
            'inetOption'=>$inetOption,
        );
        $view = array(
            'posts' => $posts,
            'posts_child' => $posts_child,
            'type_id' => $type_id,
            'row'=> $row,
         );
        return View::make('admin.post-rate-inet', $view);
    }

    public function postPostRateInet() {
        $all = Input::all();
        //var_dump($all); die();

        //ищем и сохраняем таблицу тарифов
        $inet = Rate::where('type', 'inet')->first();
        if(empty($inet)){
            $inet = new Rate();
            $inet->name = 'table price inet';
            $inet->type = 'inet';
        }
        $inet->description = json_encode($all['rateInet']);
        $inet->save();

        //добавляем дополнительные опции, определяем сортировку
        $sort = 0;
        foreach ($all['inetOption'] as $key => $value) {
            if(!empty($value['name'])){
                if(empty($value['id'])){
                    $check = new Rate();
                    $check->type = 'inetOption';
                    $check->status = 1;
                } else{
                    $check = Rate::where('type','inetOption')->where('id', $value['id'])->first();
                }
                $check->price = $value['price'];
                $check->name = $value['name'];
                $check->description = $value['description'];
                $check->position = $sort++;
                $check->save();
            }
        }

        return Redirect::to('/admin/post-rate-inet/')
                ->with('success', 'Изменения сохранены');
    }

    public function postRateItemDelete() {
        $all = Input::all();
        $item = Rate::where('type', $all['type'])->where('id',  $all['elem-id'])->delete();
        return ;
    }

    public function postRateItemImplicit() {
        $all = Input::all();
        $item = Rate::where('type', $all['type'])->where('id',  $all['elem-id'])->first();
        $item->status = $all['value'];
        $item->save();
        return ;
    }

//добавление и редактирование тарифов TV
    public function getPostRateTv() {

        $type_id=Type::where('type', 'rate')->first()->id;
        $posts = Post::where('type_id', '=', $type_id)->where('parent', '=', '0')->orderBy('created_at', 'desc')->get();
        $posts_child = Post::where('type_id', '=', $type_id)->where('parent', '!=', '0')->orderBy('created_at', 'desc')->get();

        $tv = Rate::where('type', 'tv')->orderBy('position', 'asc')->get();

        $view = array(
            'posts' => $posts,
            'posts_child' => $posts_child,
            'type_id' => $type_id,
            'row'=> $tv,
         );
        return View::make('admin.post-rate-tv', $view);
    }

    public function getEditItemTv($id='add') {

        $type_id=Type::where('type', 'rate')->first()->id;
        $posts = Post::where('type_id', '=', $type_id)->where('parent', '=', '0')->orderBy('created_at', 'desc')->get();
        $posts_child = Post::where('type_id', '=', $type_id)->where('parent', '!=', '0')->orderBy('created_at', 'desc')->get();

        $row = Rate::find($id);

        $view = array(
            'posts' => $posts,
            'posts_child' => $posts_child,
            'type_id' => $type_id,
            'row'=> $row,
         );
        return View::make('admin.post-edit-rate-tv', $view);
    }

    public function postPostRateTv() {
        $all = Input::all();
        //сохраняем сортировку
        $sort = 0;
        foreach ($all['tv'] as $key => $value) {
            if(!empty($value['id'])){
                $check = Rate::where('type','tv')->where('id', $value['id'])->first();
                $check->position = $sort++;
                $check->save();
            }
        }

        return Redirect::to('/admin/post-rate-tv/')
                ->with('success', 'Изменения сохранены');
    }

    public function postEditItemTv($id='add')
        {
            $all = Input::all();
            $rules = array(
                'name' => 'required|min:2|max:255',
            );
            $validator = Validator::make($all, $rules);
            if ( $validator -> fails() ) {
                return Redirect::to('/admin/edit-item-tv/'.$id)
                        ->withErrors($validator)
                        ->withInput()
                        ->with('error', 'Ошибка');
            }
            if(is_numeric($id))   {
                $item = Rate::find($id);
            }
            else {
                $item = new Rate();
                $item->type = 'tv';
                $item->status = 1;
            }
            $item->name = $all['name'];
            $item->subject = $all['subject'];
            $item->price = $all['price'];
            $item->description = $all['description'];
            $item->save();

            return Redirect::to('/admin/post-rate-tv')
                    ->with('success', 'Изменения сохранены');
        }

//удаление страниц
    public function getDelete($type, $type_id, $id){

        switch ($type){
            case 'page':
                $posts = Post::where('type_id', '=', $type_id)->where('id', '=', $id)->delete();
                $redir = '/admin/content/'.$type_id;
                break;
            case 'slide':
                $slide = Slider::find($id)->delete();
                $redir = '/admin/slider';
                break;
            case 'user':
                $slide = User::find($id)->delete();
                $redir = '/admin/user';
                break;
        }

        return Redirect::to($redir);

    }

//настройки
    public function getSettings()
        {
            $settings = Setting::get();

            $view = array(
                'settings' => $settings,
            );
            return View::make('admin.settings', $view);
        }

    public function postSettings($news_id='')
        {
            $settings = Input::all();

            foreach($settings as $key=>$setting) {
                if($key[0]!='_'){
                    $field_ru = Setting::where('name', '=', $key)->first();
                    $field_ru->value = $setting;
                    $field_ru->save();
                }
            }
            return Redirect::to('/admin/settings');
        }

//пользователи
    public function getUser($id='')
        {
            $users = User::get();
            $user = User::find($id);

            $view = array(
                'users' => $users,
                'row' => $user,
             );

            return View::make('admin.users', $view);
        }

    public function postUser($id)
        {
            $all = Input::all();

            $rules = array(
                'name' => 'required|min:2|max:255',
                'email'  => 'required|email',

            );
            $validator = Validator::make($all, $rules);
            if ( $validator -> fails() ) {
                return Redirect::to('/admin/user/'.$id)
                        ->withErrors($validator)
                        ->withInput()
                        ->with('error', 'Ошибка');
            }
            if($id)   {
                  $user = User::find($id);
            }
            else {
                $user = new User();
            }

            $user->name = $all['name'];
            $user->email = $all['email'];
            $user->isActive = $all['isActive'];
            $user->save();

            return Redirect::to('/admin/user/'.$id)
                    ->with('success', 'Изменения сохранены');
        }

        //слайдер

    public function getSlider($id='')
        {
            $slides_menu = Slider::get(['id', 'name']);
            $slide = Slider::where('id', $id)->get();

            $view = array(
                'slides_menu' => $slides_menu,
                'slides' => $slide,
                'row' => (!empty($slide[0]))?$slide[0]:'',
            );
            return View::make('admin.slider', $view);
        }

    public function postSlider($id='')
        {
            $all = Input::all();
            $rules = array(
                'name' => 'required|min:2|max:255',
            );
            $validator = Validator::make($all, $rules);
            if ( $validator -> fails() ) {
                return Redirect::to('/admin/slider/'.$id)
                        ->withErrors($validator)
                        ->withInput()
                        ->with('error', 'Ошибка');
            }
            if(is_numeric($id))   {
                  $post = Slider::find($id);
            }
            else {
                $post = new Slider();
            }

            $post->name = $all['name'];
            $post->text = $all['text'];
            $post->button = $all['button'];
            $post->link = $all['link'];
            $post->status = isset($all['status'])?true:false;

            if(isset($all['image'])){
                $full_name = Input::file('image')->getClientOriginalName();
                $filename=$full_name;
                $path = 'upload/slider/';
                Input::file('image')->move($path, $filename);
                $post->image = $path.$filename;
            }

            $post->save();

            return Redirect::to('/admin/slider/'.$id.'/#preview-slide')
                    ->with('success', 'Изменения сохранены');

        }



}
