<?php

namespace Akashverma3333\LaravelGitHub;

use Illuminate\Support\ServiceProvider;

class GitHubAPIServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register any bindings or services if needed
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) { // Ensure commands only register in CLI
            $this->commands([
                \Akashverma3333\LaravelGitHub\Commands\RepoCommand::class,
                \Akashverma3333\LaravelGitHub\Commands\BranchCommand::class,
                \Akashverma3333\LaravelGitHub\Commands\LoginCommand::class,
                \Akashverma3333\LaravelGitHub\Commands\LogoutCommand::class,
            ]);
        }
    }
}
