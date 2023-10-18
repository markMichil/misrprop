@php
    $languages = \Modules\Language\Models\Language::getActive();
    $locale = session('website_locale',app()->getLocale());
@endphp
{{--Multi Language--}}
@if(!empty($languages) && setting_item('site_enable_multi_lang'))
    <li class="dropdown language-dropdown">
        @foreach($languages as $language)
            @if($locale == $language->locale)
                <a href="#" data-toggle="dropdown" class="is_login">
{{--                    @if($language->flag)--}}
{{--                        <span class="flag-icon flag-icon-{{$language->flag}}"></span>--}}
{{--                    @endif--}}


                    @if($language->name == 'Egyptian')
                        AR
                    @elseif($language->name == 'English')
                        EN
                    @else
                        {{$language->name}}
                        @endif

                    <i class="fa fa-angle-down"></i>
                </a>
            @endif
        @endforeach
        <ul class="dropdown-menu text-left">
            @foreach($languages as $language)
                @if($locale != $language->locale)
                    <li>
                        <a href="{{get_lang_switcher_url($language->locale)}}" class="is_login">
{{--                            @if($language->flag)--}}
{{--                                <span class="flag-icon flag-icon-{{$language->flag}}"></span>--}}
{{--                            @endif--}}
                                @if($language->name == 'Egyptian')
                                    AR
                                @elseif($language->name == 'English')
                                    EN
                                @else
                                    {{$language->name}}
                                @endif
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </li>
@endif
{{--End Multi language--}}
