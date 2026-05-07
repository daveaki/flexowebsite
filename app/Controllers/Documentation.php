<?php

namespace App\Controllers;

class Documentation extends BaseController
{
    private array $sections = [
        'getting-started',
        'grid',
        'gap-and-area',
        'breakpoints',
        'utilities',
        'wireframe',
        'customization',
    ];

    public function index(): string
    {
        return $this->page('getting-started');
    }

    public function page(string $slug): string
    {
        if (! in_array($slug, $this->sections, true)) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title'       => lang('Docs.meta_title_' . str_replace('-', '_', $slug)),
            'description' => lang('Docs.meta_desc_' . str_replace('-', '_', $slug)),
            'slug'        => $slug,
            'sections'    => $this->sections,
        ];

        return view('website/docs/' . $slug, $data);
    }
}
