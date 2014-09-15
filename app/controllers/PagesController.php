<?php

class PagesController extends \BaseController {

    private $banners = false;

    function __construct()
    {

        if (Menu::whereSlug(Request::path())->count())
        {
            $this->banners = Menu::whereSlug(Request::path())->first()->banner;
        } else
        {
            $this->banners = false;
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home()
    {
        $banners = $this->banners;
        $howMany = Project::get()->count();
        if ($howMany > 4)
        {
            $howMany = 4;
        }
        $projects = Project::take($howMany)->get();
        $body = 'body goes here';
        $header = 'Header goes here';
        if ($content = Content::whereTag('About us')->first())
        {
            if (app::getLocale() == 'en')
            {
                $body = $content->body_en;
                $header = $content->header_en;
            } else
            {
                $body = $content->body_mn;
                $header = $content->header_mn;
            }
        }

        return View::make('pages.home')->with(compact('body', 'header', 'projects', 'banners'));
    }

    /**
     * Career
     * @return mixed
     */
    public function career()
    {
        $banners = $this->banners;

        $career = Career::all();

        $body = 'body goes here';
        $header = 'Header goes here';
        if ($content = Content::whereTag('Career')->first())
        {
            if (app::getLocale() == 'en')
            {
                $body = $content->body_en;
                $header = $content->header_en;
            } else
            {
                $body = $content->body_mn;
                $header = $content->header_mn;
            }
        }

        return View::make('pages.career')->with(compact('banners', 'career', 'body', 'header'));
    }

    /**
     * Serice page
     */
    public function service($service)
    {
        $banners = $this->banners;
        $body = 'body goes here';
        $header = 'Header goes here';

        if (($content = Content::whereTag('Design')->first()) && ($service == 'design_service'))
        {
            if (app::getLocale() == 'en')
            {
                $body = $content->body_en;
                $header = $content->header_en;
            } else
            {
                $body = $content->body_mn;
                $header = $content->header_mn;
            }
        }

        if (($content = Content::whereTag('Foundation')->first()) && ($service == 'foundation'))
        {
            if (app::getLocale() == 'en')
            {
                $body = $content->body_en;
                $header = $content->header_en;
            } else
            {
                $body = $content->body_mn;
                $header = $content->header_mn;
            }
        }

        if (($content = Content::whereTag('Structure')->first()) && ($service == 'structure'))
        {
            if (app::getLocale() == 'en')
            {
                $body = $content->body_en;
                $header = $content->header_en;
            } else
            {
                $body = $content->body_mn;
                $header = $content->header_mn;
            }
        }

        if (($content = Content::whereTag('Curtain wall')->first()) && ($service == 'curtain_wall'))
        {
            if (app::getLocale() == 'en')
            {
                $body = $content->body_en;
                $header = $content->header_en;
            } else
            {
                $body = $content->body_mn;
                $header = $content->header_mn;
            }
        }

        return View::make('pages.services.service')->with(compact('body', 'header', 'banners'));
    }

    /**
     * show projects
     * @return mixed
     *         $userIds = $user->follows()->lists('followed_id');

    $userIds[] = $user->id;

    return Status::whereIn('user_id', $userIds)->latest()->get();
     */
    public function show_projects()
    {
        $input = urldecode(Input::get('tag'));
        $tagId = DB::table('tags')->where('tag_en', '=' , $input)->pluck('id');
        $projectIds = DB::table('project_tag')->where('tag_id', '=', $tagId)->lists('project_id');

        if (isset($tagId))
        {
            $projects = Project::whereIn('id', $projectIds)->get();
        } else
        {
            $projects = Project::whereType('project')->with('tags')->get();
        }

        return View::make('pages.projects')->withProjects($projects);
    }

    public function show_project_by_id($id)
    {

        $project = Project::find($id);

        return View::make('pages.project')->withProject($project);
    }

    /**
     * show news
     * @return mixed
     */
    public function show_news()
    {
        $projects = Project::whereType('news')->get();

        return View::make('pages.news')->withProjects($projects);
    }

    public function show_news_by_id($id)
    {

        $project = Project::find($id);

        return View::make('pages.newsId')->withProject($project);
    }


}
