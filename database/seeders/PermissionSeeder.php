<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $rolesStructure = [
            'Author' => [
                'dashboard' => 'r',
                'business' => 'r,c,u,d',
                'business-categories' => 'r,c,u,d',
                'plans' => 'r,c,u,d',
                'plan-features' => 'r,c,u,d',
                'payment-types' => 'r,c,u,d',
                'faqs' => 'r,c,u,d',
                'tutorials' => 'r,c,u,d',
                'terms' => 'r,c,u,d',
                'about-us' => 'r,c,u,d',
                'company' => 'r,c,u,d',
                'study-abroad' => 'r,c,u,d',
                'menu' => 'r,c,u,d',
                'service' => 'r,c,u,d',
                'testimonial' => 'r,c,u,d',
                'applicant' => 'r,c,u,d',
                'contact' => 'r,c,u,d',
                'subjects' => 'r,c,u,d',
                'banners' => 'r,c,u,d',
                'partner' => 'r,c,u,d',
                'study-section' => 'r,c,u,d',
                'testimonials' => 'r,c,u,d',
                'features' => 'r,c,u,d',
                'interfaces' => 'r,c,u,d',
                'designs' => 'r,c,u,d',
                'blogs' => 'r,c,u,d',
                'newsletters' => 'r,c,u,d',
                'currencies' => 'r,c,u,d',


                // settings
                'system-settings' => 'r,u',
                'settings' => 'r,u',
                'roles' => 'r,c,u,d',
                'permissions' => 'r,c',
                'notifications' => 'r,u',
                'languages' => 'r,c,u,d,df',
                'feedback' => 'r,c,u,d',
                'notices' => 'r,c,u,d',
            ],
            'Admin' => [
                'dashboard' => 'r',
                'business' => 'r,c,u,d',
                'business-categories' => 'r,c,u,d',
                'plans' => 'r,c,u,d',
                'payment-types' => 'r,c,u,d',
                'faqs' => 'r,c,u,d',
                'tutorials' => 'r,c,u,d',

                // settings
                'system-settings' => 'r,u',
                'settings' => 'r,u',
                'roles' => 'r,c,u,d',
                'permissions' => 'r,c',
                'notifications' => 'r,u',
            ],
            'Stuff' => [
                'dashboard' => 'r',
                'business' => 'r,c,u,d',
                'business-categories' => 'r,c,u,d',
                'plans' => 'r,c,u,d',
                'payment-types' => 'r,c,u,d',
                'faqs' => 'r,c,u,d',
                'tutorials' => 'r,c,u,d',
            ],
        ];

        foreach ($rolesStructure as $key => $modules) {
            // Create a new role
            $role = Role::firstOrCreate([
                'name' => str($key)->remove(' ')->lower(),
                'guard_name' => 'web'
            ]);
            $permissions = [];

            $this->command->info('Creating Role '. strtoupper($key));

            // Reading role permission modules
            foreach ($modules as $module => $value) {

                foreach (explode(',', $value) as $perm) {

                    $permissionValue = $this->permissionMap()->get($perm);

                    $permissions[] = Permission::firstOrCreate([
                        'name' => $module . '-' . $permissionValue,
                        'guard_name' => 'web'
                    ])->id;

                    $this->command->info('Creating Permission to '.$permissionValue.' for '. $module);
                }
            }

            // Attach all permissions to the role
            $role->permissions()->sync($permissions);

            $this->command->info("Creating '{$key}' user");
            // Create default user for each role
            $user = User::create([
                'phone' => $faker->unique()->phoneNumber,
                'role' => str($key)->remove(' ')->lower(),
                'name' => ucwords(str_replace('_', ' ', $key)),
                'password' => bcrypt(str($key)->remove(' ')->lower().'@baari'),
                'email' => str($key)->remove(' ')->lower().'@baari'.'.com',
                'email_verified_at' => now(),
            ]);

            $user->assignRole($role);
        }
    }

    private function permissionMap() {
        return collect([
            'c' => 'create',
            'r' => 'read',
            'u' => 'update',
            'd' => 'delete',
            'df' => 'default',
        ]);
    }

}
