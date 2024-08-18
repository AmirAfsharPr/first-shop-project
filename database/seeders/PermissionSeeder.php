<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * categories permission
        */
        Permission::query()->insert([
            [
                'title' => 'read-category',
                'label' => 'مشاهده دسته بندی'
            ],
            [
                'title' => 'create-category',
                'label' => 'ایجاد دسته بندی'
            ],
            [
                'title' => 'update-category',
                'label' => 'ویرایش دسته بندی'
            ],
            [
                'title' => 'delete-category',
                'label' => 'حذف دسته بندی'
            ]
        ]);

        /*
         * brands permission
        */
        Permission::query()->insert([
            [
                'title' => 'read-brands',
                'label' => 'مشاهده برند'
            ],
            [
                'title' => 'create-brands',
                'label' => 'ایجاد برند'
            ],
            [
                'title' => 'update-brands',
                'label' => 'ویرایش برند'
            ],
            [
                'title' => 'delete-brands',
                'label' => 'حذف برند'
            ]
        ]);

        /*
         * products permission
        */
        Permission::query()->insert([
            [
                'title' => 'read-products',
                'label' => 'مشاهده محصول'
            ],
            [
                'title' => 'create-products',
                'label' => 'ایجاد محصول'
            ],
            [
                'title' => 'update-products',
                'label' => 'ویرایش محصول'
            ],
            [
                'title' => 'delete-products',
                'label' => 'حذف محصول'
            ]
        ]);

        /*
         * discounts permission
        */
        Permission::query()->insert([
            [
                'title' => 'read-discounts',
                'label' => 'مشاهده تخفیف'
            ],
            [
                'title' => 'create-discounts',
                'label' => 'ایجاد تخفیف'
            ],
            [
                'title' => 'update-discounts',
                'label' => 'ویرایش تخفیف'
            ],
            [
                'title' => 'delete-discounts',
                'label' => 'حذف تخفیف'
            ]
        ]);

        /*
         * picture permission
        */
        Permission::query()->insert([
            [
                'title' => 'read-picture',
                'label' => 'مشاهده تصویر'
            ],
            [
                'title' => 'create-picture',
                'label' => 'ایجاد تصویر'
            ],
            [
                'title' => 'update-picture',
                'label' => 'ویرایش تصویر'
            ],
            [
                'title' => 'delete-picture',
                'label' => 'حذف تصویر'
            ]
        ]);

        /*
         * offer permission
        */
        Permission::query()->insert([
            [
                'title' => 'read-offer',
                'label' => 'مشاهده کد تخفیف'
            ],
            [
                'title' => 'create-offer',
                'label' => 'ایجاد کد تخفیف'
            ],
            [
                'title' => 'update-offer',
                'label' => 'ویرایش کد تخفیف'
            ],
            [
                'title' => 'delete-offer',
                'label' => 'حذف کد تخفیف'
            ]
        ]);

        /*
         * roles permission
        */
        Permission::query()->insert([
            [
                'title' => 'read-roles',
                'label' => 'مشاهده نقش'
            ],
            [
                'title' => 'create-roles',
                'label' => 'ایجاد نقش'
            ],
            [
                'title' => 'update-roles',
                'label' => 'ویرایش نقش'
            ],
            [
                'title' => 'delete-roles',
                'label' => 'حذف نقش'
            ]
        ]);

        /*
         * dashboard permission
        */
        Permission::query()->insert([
            [
                'title' => 'view-dashboard',
                'label' => 'مشاهده داشبورد'
            ]
        ]);


    }


}
