<?php

namespace App\Admin\Controllers;

use App\Admin\Metrics\Examples;
use App\Http\Controllers\Controller;
use Dcat\Admin\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use http\Message\Body;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        /*return $content
            ->header('Dashboard')
            ->description('Description...')
            ->body(function (Row $row) {
                $row->column(6, function (Column $column) {
                    $column->row(Dashboard::title());
                    $column->row(new Examples\Tickets());
                });

                $row->column(6, function (Column $column) {
                    $column->row(function (Row $row) {
                        $row->column(6, new Examples\NewUsers());
                        $row->column(6, new Examples\NewDevices());
                    });

                    $column->row(new Examples\Sessions());
                    $column->row(new Examples\ProductOrders());
                });
            });*/
        return $content
            ->header('新闻管理')
            ->description('增删改查新闻')
            ->breadcrumb(
                ['text'=>'首页','url'=>'/admin'],
                ['text'=>'新闻管理','url'=>'/admin/news'],
                ['text'=>'权限管理','url'=>'/admin/users']
            )
            ->body(new Examples\Sessions());

    }
}
