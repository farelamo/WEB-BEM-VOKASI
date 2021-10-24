<?php

namespace App\Providers;

use App\Actions\Jetstream\AddTeamMember;
use App\Actions\Jetstream\CreateTeam;
use App\Actions\Jetstream\DeleteTeam;
use App\Actions\Jetstream\DeleteUser;
use App\Actions\Jetstream\InviteTeamMember;
use App\Actions\Jetstream\RemoveTeamMember;
use App\Actions\Jetstream\UpdateTeamName;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Laravel\Jetstream\Jetstream;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::createTeamsUsing(CreateTeam::class);
        Jetstream::updateTeamNamesUsing(UpdateTeamName::class);
        Jetstream::addTeamMembersUsing(AddTeamMember::class);
        Jetstream::inviteTeamMembersUsing(InviteTeamMember::class);
        Jetstream::removeTeamMembersUsing(RemoveTeamMember::class);
        Jetstream::deleteTeamsUsing(DeleteTeam::class);
        Jetstream::deleteUsersUsing(DeleteUser::class);

        // Fortify::loginView(function () {
        //     if (session('link')) {
        //         $myPath = session('link');
        //         // $myPath = '/dashboard';
        //         $loginPath = url('/login');
        //         $previous = url()->previous();

        //         if ($previous = $loginPath) {
        //             session(['link' => $myPath]);
        //         } 
        //         else {
        //             session(['link' => $previous]);
        //         }
        //     } else {
        //         session(['link' => url()->previous()]);
        //     }
        //     return view('auth.login');
        // });

        //Get Session Link for Registration View

        Fortify::registerView(function () {
            if (session('link')) {
                $myPath = session('link');
                $registerPath = url('/register');
                $previous = url()->previous();

                if ($previous = $registerPath) {
                    session(['link' => $myPath]);
                } else {
                    session(['link' => $previous]);
                }
            } else {
                session(['link' => url()->previous()]);
            }
            return view('auth.register');
        });

        // Fortify::authenticateUsing(function (Request $request) {
        //     $user = User::where('isApprove', $request->auth)->first();

        //     if ($user && Hash::check($request->password, $user->password)) {
        //         return $user;
        //     }else {
        //         $request->session()->flash('message', 'haha hehee !!');
        //         return false;
        //     }
        // });

        //   register new LoginResponse & RegisterResponse
        // $this->app->singleton(
        //     \Laravel\Fortify\Contracts\LoginResponse::class,
        //     \App\Http\Responses\LoginResponse::class,
        // );

       
    }

    /**
     * Configure the roles and permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::role('admin', 'Administrator', [
            'create',
            'read',
            'update',
            'delete',
        ])->description('Administrator users can perform any action.');

        Jetstream::role('editor', 'Editor', [
            'read',
            'create',
            'update',
        ])->description('Editor users have the ability to read, create, and update.');
    }
}
