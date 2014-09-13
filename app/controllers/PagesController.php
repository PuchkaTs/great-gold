<?php

class PagesController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home()
    {
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

        return View::make('pages.home')->with(compact('body', 'header', 'projects'));
    }

    /**
     * Design page
     */
    public function service($service)
    {

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
        return View::make('pages.services.service')->with(compact('body', 'header'));
    }

    /**
     * show projects
     * @return mixed
     */
    public function show_projects()
    {
        $projects = Project::whereType('project')->with('tags')->get();

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
