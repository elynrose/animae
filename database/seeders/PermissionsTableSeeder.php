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
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'age_group_create',
            ],
            [
                'id'    => 18,
                'title' => 'age_group_edit',
            ],
            [
                'id'    => 19,
                'title' => 'age_group_show',
            ],
            [
                'id'    => 20,
                'title' => 'age_group_delete',
            ],
            [
                'id'    => 21,
                'title' => 'age_group_access',
            ],
            [
                'id'    => 22,
                'title' => 'gender_create',
            ],
            [
                'id'    => 23,
                'title' => 'gender_edit',
            ],
            [
                'id'    => 24,
                'title' => 'gender_show',
            ],
            [
                'id'    => 25,
                'title' => 'gender_delete',
            ],
            [
                'id'    => 26,
                'title' => 'gender_access',
            ],
            [
                'id'    => 27,
                'title' => 'body_type_create',
            ],
            [
                'id'    => 28,
                'title' => 'body_type_edit',
            ],
            [
                'id'    => 29,
                'title' => 'body_type_show',
            ],
            [
                'id'    => 30,
                'title' => 'body_type_delete',
            ],
            [
                'id'    => 31,
                'title' => 'body_type_access',
            ],
            [
                'id'    => 32,
                'title' => 'hair_color_create',
            ],
            [
                'id'    => 33,
                'title' => 'hair_color_edit',
            ],
            [
                'id'    => 34,
                'title' => 'hair_color_show',
            ],
            [
                'id'    => 35,
                'title' => 'hair_color_delete',
            ],
            [
                'id'    => 36,
                'title' => 'hair_color_access',
            ],
            [
                'id'    => 37,
                'title' => 'hair_length_create',
            ],
            [
                'id'    => 38,
                'title' => 'hair_length_edit',
            ],
            [
                'id'    => 39,
                'title' => 'hair_length_show',
            ],
            [
                'id'    => 40,
                'title' => 'hair_length_delete',
            ],
            [
                'id'    => 41,
                'title' => 'hair_length_access',
            ],
            [
                'id'    => 42,
                'title' => 'hair_style_create',
            ],
            [
                'id'    => 43,
                'title' => 'hair_style_edit',
            ],
            [
                'id'    => 44,
                'title' => 'hair_style_show',
            ],
            [
                'id'    => 45,
                'title' => 'hair_style_delete',
            ],
            [
                'id'    => 46,
                'title' => 'hair_style_access',
            ],
            [
                'id'    => 47,
                'title' => 'eye_color_create',
            ],
            [
                'id'    => 48,
                'title' => 'eye_color_edit',
            ],
            [
                'id'    => 49,
                'title' => 'eye_color_show',
            ],
            [
                'id'    => 50,
                'title' => 'eye_color_delete',
            ],
            [
                'id'    => 51,
                'title' => 'eye_color_access',
            ],
            [
                'id'    => 52,
                'title' => 'eye_shape_create',
            ],
            [
                'id'    => 53,
                'title' => 'eye_shape_edit',
            ],
            [
                'id'    => 54,
                'title' => 'eye_shape_show',
            ],
            [
                'id'    => 55,
                'title' => 'eye_shape_delete',
            ],
            [
                'id'    => 56,
                'title' => 'eye_shape_access',
            ],
            [
                'id'    => 57,
                'title' => 'skin_tone_create',
            ],
            [
                'id'    => 58,
                'title' => 'skin_tone_edit',
            ],
            [
                'id'    => 59,
                'title' => 'skin_tone_show',
            ],
            [
                'id'    => 60,
                'title' => 'skin_tone_delete',
            ],
            [
                'id'    => 61,
                'title' => 'skin_tone_access',
            ],
            [
                'id'    => 62,
                'title' => 'facial_expression_create',
            ],
            [
                'id'    => 63,
                'title' => 'facial_expression_edit',
            ],
            [
                'id'    => 64,
                'title' => 'facial_expression_show',
            ],
            [
                'id'    => 65,
                'title' => 'facial_expression_delete',
            ],
            [
                'id'    => 66,
                'title' => 'facial_expression_access',
            ],
            [
                'id'    => 67,
                'title' => 'dress_style_create',
            ],
            [
                'id'    => 68,
                'title' => 'dress_style_edit',
            ],
            [
                'id'    => 69,
                'title' => 'dress_style_show',
            ],
            [
                'id'    => 70,
                'title' => 'dress_style_delete',
            ],
            [
                'id'    => 71,
                'title' => 'dress_style_access',
            ],
            [
                'id'    => 72,
                'title' => 'background_create',
            ],
            [
                'id'    => 73,
                'title' => 'background_edit',
            ],
            [
                'id'    => 74,
                'title' => 'background_show',
            ],
            [
                'id'    => 75,
                'title' => 'background_delete',
            ],
            [
                'id'    => 76,
                'title' => 'background_access',
            ],
            [
                'id'    => 77,
                'title' => 'character_create',
            ],
            [
                'id'    => 78,
                'title' => 'character_edit',
            ],
            [
                'id'    => 79,
                'title' => 'character_show',
            ],
            [
                'id'    => 80,
                'title' => 'character_delete',
            ],
            [
                'id'    => 81,
                'title' => 'character_access',
            ],
            [
                'id'    => 82,
                'title' => 'character_setting_access',
            ],
            [
                'id'    => 83,
                'title' => 'character_role_create',
            ],
            [
                'id'    => 84,
                'title' => 'character_role_edit',
            ],
            [
                'id'    => 85,
                'title' => 'character_role_show',
            ],
            [
                'id'    => 86,
                'title' => 'character_role_delete',
            ],
            [
                'id'    => 87,
                'title' => 'character_role_access',
            ],
            [
                'id'    => 88,
                'title' => 'emotion_create',
            ],
            [
                'id'    => 89,
                'title' => 'emotion_edit',
            ],
            [
                'id'    => 90,
                'title' => 'emotion_show',
            ],
            [
                'id'    => 91,
                'title' => 'emotion_delete',
            ],
            [
                'id'    => 92,
                'title' => 'emotion_access',
            ],
            [
                'id'    => 93,
                'title' => 'payment_create',
            ],
            [
                'id'    => 94,
                'title' => 'payment_edit',
            ],
            [
                'id'    => 95,
                'title' => 'payment_show',
            ],
            [
                'id'    => 96,
                'title' => 'payment_delete',
            ],
            [
                'id'    => 97,
                'title' => 'payment_access',
            ],
            [
                'id'    => 98,
                'title' => 'credit_create',
            ],
            [
                'id'    => 99,
                'title' => 'credit_edit',
            ],
            [
                'id'    => 100,
                'title' => 'credit_show',
            ],
            [
                'id'    => 101,
                'title' => 'credit_delete',
            ],
            [
                'id'    => 102,
                'title' => 'credit_access',
            ],
            [
                'id'    => 103,
                'title' => 'task_create',
            ],
            [
                'id'    => 104,
                'title' => 'task_edit',
            ],
            [
                'id'    => 105,
                'title' => 'task_show',
            ],
            [
                'id'    => 106,
                'title' => 'task_delete',
            ],
            [
                'id'    => 107,
                'title' => 'task_access',
            ],
            [
                'id'    => 108,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
