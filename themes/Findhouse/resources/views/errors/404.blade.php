@extends('errors.illustrated-layout',['title'=>setting_item_with_lang('error_404_title')])
@section('title',setting_item_with_lang('error_404_title'))
@section('message',!empty($exception->getMessage())? $exception->getMessage() :setting_item_with_lang('error_404_desc'))
@section('code',404)
@section('image',get_file_url(setting_item('error_404_banner')))

