<?php

namespace Creode\LaravelCareers\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Creode\LaravelCareers\Repositories\CareerRepository;

class CareerController extends Controller
{
    /**
     * Slug of the career to be rendered.
     *
     * @var string
     */
    private $slug;

    /**
     * View to be used when rendering a career.
     *
     * @var string
     */
    protected $view = 'careers::career';

    /**
     * CareerController constructor.
     */
    public function __construct(protected CareerRepository $careerRepository)
    {
    }

    /**
     * Default Action for Controller.
     */
    public function __invoke($slug, Request $request): View
    {
        $this->slug = $slug;
        $viewData = $this->prepareViewData();
        if (empty($viewData)) {
            abort(404);
        }

        return view($this->view, $viewData);
    }

    /**
     * Prepares all of the data before rendering the view.
     *
     * @return array
     */
    protected function prepareViewData(): array
    {
        if (!$career = $this->getCareer($this->slug)) {
            return [];
        }

        return ['career' => $career];
    }

    /**
     * Gets a career by its slug.
     *
     * @param string $slug
     * @return ?\Creode\LaravelCareers\Models\Career
     */
    protected function getCareer($slug)
    {
        return $this->careerRepository->where('slug', $slug)->first();
    }
}
