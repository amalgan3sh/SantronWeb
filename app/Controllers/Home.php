<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('header') . view('index') . view('footer');
    }
    public function about(): string
    {
        return view('header') . view('about') . view('footer');
    }
    public function night_club(): string
    {
        return view('header') . view('night_club') . view('footer');
    }
    public function spa_and_relaxation(): string
    {
        return view('header') . view('spa_and_relaxation') . view('footer');
    }
    public function lounge_experience(): string
    {
        return view('header') . view('lounge_experience') . view('footer');
    }
    public function hotel_supplies(): string
    {
        return view('header') . view('hotel_supplies') . view('footer');
    }
    public function night_club_gallery(): string
    {
        return view('header') . view('night_club_gallery') . view('footer');
    }
    public function behind_the_scene_gallery(): string
    {
        return view('header') . view('behind_the_scene_gallery') . view('footer');
    }
    public function spa_and_wellness_gallery(): string
    {
        return view('header') . view('spa_and_wellness_gallery') . view('footer');
    }
    public function our_global_presence_gallery(): string
    {
        return view('header') . view('global_presence_gallery') . view('footer');
    }
    public function lounge_experience_gallery(): string
    {
        return view('header') . view('lounge_experience_gallery') . view('footer');
    }
    public function founders_message(): string
    {
        return view('header') . view('founders_message') . view('footer');
    }
    public function chairmans_message(): string
    {
        return view('header') . view('chairmans_message') . view('footer');
    }
    public function ceos_message(): string
    {
        return view('header') . view('ceos_message') . view('footer');
    }
    public function blog(): string
    {
        return view('header') . view('blog') . view('footer');
    }
    public function contact_us(): string
    {
        return view('header') .view('contact_us').  view('footer');
    }
}
