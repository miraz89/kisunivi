<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // find user
        $user = User::find(1);

        // Create Roles
        $SuperAdminRole = Role::create(['name' => 'super admin']);
        $AdminRole = Role::create(['name' => 'admin']);
        $EditorRole = Role::create(['name' => 'editor']);
        $memberRole = Role::create(['name' => 'member']);
        $GuestRole = Role::create(['name' => 'guest']);


        // if user found
        if ($user){
            $user->assignRole($SuperAdminRole);
        }


        // Permission List as array
        $permissions = [
            [
                'group_name' => 'member',
                'permissions' => [
                    'member.all',
                    'member.create',
                    'member.show',
                    'member.update',
                    'member.delete',
                    'member.approved',
                    'member.disapproved',
                    'member.ban',
                ]
            ],
            [
                'group_name' => 'user',
                'permissions' => [
                    'user.all',
                    'user.create',
                    'user.show',
                    'user.update',
                    'user.delete',
                    'user.approved',
                    'user.disapproved',
                    'user.ban',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    'role.all',
                    'role.create',
                    'role.show',
                    'role.update',
                    'role.delete',
                    'role.approved',
                ]
            ],
            [
                'group_name' => 'slider',
                'permissions' => [
                    'slider.all',
                    'slider.create',
                    'slider.show',
                    'slider.update',
                    'slider.delete',
                    'slider.approved',
                ]
            ],
            [
                'group_name' => 'client',
                'permissions' => [
                    'client.all',
                    'client.create',
                    'client.show',
                    'client.update',
                    'client.delete',
                    'client.approved',
                ]
            ],
            [
                'group_name' => 'category',
                'permissions' => [
                    'category.all',
                    'category.create',
                    'category.show',
                    'category.update',
                    'category.delete',
                    'category.approved',
                ]
            ],
            [
                'group_name' => 'post',
                'permissions' => [
                    'post.all',
                    'post.create',
                    'post.show',
                    'post.update',
                    'post.delete',
                    'post.approved',
                ]
            ],
            [
                'group_name' => 'news_category',
                'permissions' => [
                    'news_category.all',
                    'news_category.create',
                    'news_category.show',
                    'news_category.update',
                    'news_category.delete',
                    'news_category.approved',
                ]
            ],
            [
                'group_name' => 'news',
                'permissions' => [
                    'news.all',
                    'news.create',
                    'news.show',
                    'news.update',
                    'news.delete',
                    'news.approved',
                ]
            ],
            [
                'group_name' => 'testimonial',
                'permissions' => [
                    'testimonial.all',
                    'testimonial.create',
                    'testimonial.show',
                    'testimonial.update',
                    'testimonial.delete',
                    'testimonial.approved',
                ]
            ],
            [
                'group_name' => 'team',
                'permissions' => [
                    'team.all',
                    'team.create',
                    'team.show',
                    'team.update',
                    'team.delete',
                    'team.approved',
                ]
            ],
            [
                'group_name' => 'event',
                'permissions' => [
                    'event.all',
                    'event.create',
                    'event.show',
                    'event.update',
                    'event.delete',
                    'event.approved',
                ]
            ],
            [
                'group_name' => 'lecture',
                'permissions' => [
                    'lecture.all',
                    'lecture.create',
                    'lecture.show',
                    'lecture.update',
                    'lecture.delete',
                    'lecture.approved',
                ]
            ],
            [
                'group_name' => 'settings',
                'permissions' => [
                    'settings.all',
                    'settings.create',
                    'settings.show',
                    'settings.update',
                    'settings.delete',
                    'settings.approved',
                ]
            ],
            [
                'group_name' => 'guest',
                'permissions' => [
                    'guest.all',
                    'guest.create',
                    'guest.show',
                    'guest.update',
                    'guest.delete',
                    'guest.approved',
                ]
            ],
            [
                'group_name' => 'about',
                'permissions' => [
                    'about.all',
                    'about.create',
                    'about.show',
                    'about.update',
                    'about.delete',
                    'about.approved',
                ]
            ],

        ];

        // Assign Permissions

        for ($i = 0; $i < count($permissions); $i++){
            $permissionGroup = $permissions[$i]['group_name'];

            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++){
                // Create Permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j],'group_name' =>  $permissionGroup ]);
                $SuperAdminRole->givePermissionTo($permission);
                $permission->assignRole($SuperAdminRole);
            }
        }
    }
}
