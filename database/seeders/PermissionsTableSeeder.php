<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 19,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 23,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 24,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 25,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 26,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 27,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 28,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 29,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 30,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 31,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 32,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 33,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 34,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 35,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 36,
                'title' => 'task_create',
            ],
            [
                'id'    => 37,
                'title' => 'task_edit',
            ],
            [
                'id'    => 38,
                'title' => 'task_show',
            ],
            [
                'id'    => 39,
                'title' => 'task_delete',
            ],
            [
                'id'    => 40,
                'title' => 'task_access',
            ],
            [
                'id'    => 41,
                'title' => 'task_calendar_access',
            ],
            [
                'id'    => 42,
                'title' => 'dashboard_data_access',
            ],
            [
                'id'    => 43,
                'title' => 'may_create',
            ],
            [
                'id'    => 44,
                'title' => 'may_edit',
            ],
            [
                'id'    => 45,
                'title' => 'may_show',
            ],
            [
                'id'    => 46,
                'title' => 'may_delete',
            ],
            [
                'id'    => 47,
                'title' => 'may_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
