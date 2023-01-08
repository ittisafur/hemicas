<?php

namespace App\Functions;

use Auth;

class Menu
{

    public function adminDefaultMenu()
    {
        return [
            'start' => [
                ['visible' => true, 'tag' => 'dashboard', 'icon' => '<i class="icon-home"></i>', 'title' => "Dashboard", 'url' => 'admin',],
            ],
            'end' => [
                ['visible' => true, 'tag' => 'logout', 'icon' => '<i class="icon-signout"></i>', 'title' => "Logout", 'url' => 'logout',],
            ],
        ];
    }

    public function adminMenu()
    {
        return [
            'items' => [
                [
                    'visible' => $this->permission('category'), 'tag' => 'category', 'icon' => '<i class="icon-pie-chart"></i>', 'title' => "Categories",
                    'items' => [
                        ['visible' => $this->permission('cardcategory'), 'tag' => 'cardcategory', 'title' => "Card Category", 'url' => 'admin/categories',],
                        ['visible' => $this->permission('subcategory'), 'tag' => 'subcategory', 'title' => "Sub Category", 'url' => 'admin/sub-categories',],
                    ],
                ],
                ['visible' => true, 'tag' => 'cause', 'icon' => '<i class="icon-eyeglasses"></i>', 'title' => "Causes", 'url' => 'admin/cause',],
                ['visible' => true, 'tag' => 'cloth', 'icon' => '<i class="icon-list"></i>', 'title' => "Cloths", 'url' => 'admin/cloth',],
                ['visible' => true, 'tag' => 'contact', 'icon' => '<i class="icon-users"></i>', 'title' => "Contacts", 'url' => 'admin/contact',],
                [
                    'visible' => true, 'tag' => 'donation', 'icon' => '<i class="icon-pie-chart"></i>', 'title' => "Donation List",
                    'items' => [
                        ['visible' => true, 'tag' => 'donate', 'title' => "Donate", 'url' => 'admin/donate',],
                        ['visible' => true, 'tag' => 'sponsorDonate', 'title' => "Sponsor Donate", 'url' => 'admin/sponsor-donate',],
                        ['visible' => true, 'tag' => 'zakat', 'title' => "Zakat", 'url' => 'admin/zakat',],
                    ],
                ],
                ['visible' => true, 'tag' => 'faq', 'icon' => '<i class="icon-question"></i>', 'title' => "Faqs", 'url' => 'admin/faq',],
                // ['visible' => true, 'tag' => 'gift', 'icon' => '<i class="icon-pointer"></i>', 'title' => "Gifts", 'url' => 'admin/gift',],
                ['visible' => true, 'tag' => 'idea', 'icon' => '<i class="icon-list"></i>', 'title' => "Ideas", 'url' => 'admin/idea',],
                ['visible' => true, 'tag' => 'program', 'icon' => '<i class="icon-pie-chart"></i>', 'title' => "Programs", 'url' => 'admin/program',],

                [
                    'visible' => true, 'tag' => 'sponsor', 'icon' => '<i class="icon-pie-chart"></i>', 'title' => "Sponsor List",
                    'items' => [
                        ['visible' => true, 'tag' => 'sponsor', 'title' => "sponsor", 'url' => 'admin/sponsor',],
                        ['visible' => true, 'tag' => 'sponsor', 'title' => "Sponsor list order", 'url' => 'admin/sponsor/list/order',],
                    ],
                ],
                ['visible' => true, 'tag' => 'success', 'icon' => '<i class="icon-list"></i>', 'title' => "Success Story", 'url' => 'admin/success',],
                ['visible' => true, 'tag' => 'user', 'icon' => '<i class="icon-user"></i>', 'title' => "Users", 'url' => 'admin/user',],
                ['visible' => true, 'tag' => 'volunteer', 'icon' => '<i class="icon-pointer"></i>', 'title' => "Volunteers", 'url' => 'admin/volunteer',],

            ],
        ];
    }

    public function widget($user_id, $nav = "", $subnav = "")
    {
        $defaultData = $this->adminDefaultMenu();
        $data = $this->adminMenu();
        $items = $data['items'];
        $html = "<ul class='page-sidebar-menu' data-keep-expanded='false' data-auto-scroll='true' data-slide-speed='200'>";
        foreach ($items as $key => $item) {
            if ($item['visible']) {
                $class = $nav == $item['tag'] ? 'active open' : '';
                $url = isset($item['url']) ? url($item['url']) : "javascript:;";
                $subitem = isset($item['items']) ? true : false;
                $open = "";
                if ($subitem && $subnav != "") {
                    $open = $this->hasSubnav($item['items'], $subnav);
                }

                $html .= "<li class='nav-item " . $class . "'>";
                $html .= "<a href=$url class='nav-link nav-toggle'>";
                $html .= $item['icon'];
                $html .= "<span class='title'>" . $item['title'] . "</span>";
                $html .= $subitem ? "<span class='arrow " . $open . "'></span>" : "";
                $html .= "</a>";

                if ($subitem) {
                    $html .= "<ul class='sub-menu'>";
                    $subitems = $item['items'];
                    foreach ($subitems as $subitem) {
                        if ($subitem['visible']) {
                            $class = $subnav == $subitem['tag'] ? 'active open' : '';
                            $url = url($subitem['url']);
                            $html .= "<li class='nav-item " . $class . "'>";
                            $html .= "<a href=$url class='nav-link'>";
                            $html .= "<span class='title'> " . $subitem['title'] . " </span>";
                            $html .= "</a>";
                            $html .= "</li>";
                        }
                    }
                    $html .= "</ul>";
                }
                $html .= "</li>";
            }
        }
        $html .= "</ul>";
        return $html;
    }

    public function permission($value)
    {
        $permissions = Auth::user()->permissions;
        $permissions = json_decode($permissions, true);
        if (is_array($permissions)) {
            return in_array($value, $permissions);
        }
        return false;
    }

    public function hasSubnav($items, $subnav)
    {
        foreach ($items as $subitems) {
            if (in_array($subnav, $subitems)) {
                return "open";
            }
        }
        return "";
    }
}
