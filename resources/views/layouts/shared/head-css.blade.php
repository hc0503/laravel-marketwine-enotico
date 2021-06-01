@yield('css')

<!-- icons -->
<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />


@if(isset($mode) && $mode == 'rtl')

    <!-- App css -->
    @if(isset($demo) && $demo == 'creative')
        <link href="{{asset('assets/css/bootstrap-creative.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{asset('assets/css/app-creative-rtl.min.css')}} " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
        <link href="{{asset('assets/css/bootstrap-creative-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
        <link href="{{asset('assets/css/app-creative-dark-rtl.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
    @else
        @if(isset($demo) && $demo == 'modern')
            <link href="{{asset('assets/css/bootstrap-modern.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
            <link href="{{asset('assets/css/app-modern-rtl.min.css')}} " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
            <link href="{{asset('assets/css/bootstrap-modern-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
            <link href="{{asset('assets/css/app-modern-dark-rtl.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
        @else
            @if(isset($demo) && $demo == 'material')
                <link href="{{asset('assets/css/bootstrap-material.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                <link href="{{asset('assets/css/app-material-rtl.min.css')}} " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                <link href="{{asset('assets/css/bootstrap-material-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                <link href="{{asset('assets/css/app-material-dark-rtl.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
            @else
                @if(isset($demo) && $demo == 'purple')
                    <link href="{{asset('assets/css/bootstrap-purple.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                    <link href="{{asset('assets/css/app-purple-rtl.min.css')}} " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                    <link href="{{asset('assets/css/bootstrap-purple-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                    <link href="{{asset('assets/css/app-purple-dark-rtl.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled /> 
                @else
                    @if(isset($demo) && $demo == 'saas')
                        <link href="{{asset('assets/css/bootstrap-saas.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                        <link href="{{asset('assets/css/app-saas-rtl.min.css')}} " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                        <link href="{{asset('assets/css/bootstrap-saas-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                        <link href="{{asset('assets/css/app-saas-dark-rtl.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />    
                    @else
                        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                        <link href="{{asset('assets/css/app-rtl.min.css')}} " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                        <link href="{{asset('assets/css/bootstrap-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                        <link href="{{asset('assets/css/app-dark-rtl.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />    
                        @endif
                @endif
            @endif
        @endif    
    @endif

@else
    <!-- App css -->
    @if(isset($demo) && $demo == 'creative')
    <link href="{{asset('assets/css/bootstrap-creative.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{asset('assets/css/app-creative.min.css')}} " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
    <link href="{{asset('assets/css/bootstrap-creative-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="{{asset('assets/css/app-creative-dark.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
    @else
    @if(isset($demo) && $demo == 'modern')
        <link href="{{asset('assets/css/bootstrap-modern.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{asset('assets/css/app-modern.min.css')}} " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
        <link href="{{asset('assets/css/bootstrap-modern-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
        <link href="{{asset('assets/css/app-modern-dark.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
    @else
        @if(isset($demo) && $demo == 'material')
            <link href="{{asset('assets/css/bootstrap-material.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
            <link href="{{asset('assets/css/app-material.min.css')}} " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
            <link href="{{asset('assets/css/bootstrap-material-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
            <link href="{{asset('assets/css/app-material-dark.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />
        @else
            @if(isset($demo) && $demo == 'purple')
                <link href="{{asset('assets/css/bootstrap-purple.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                <link href="{{asset('assets/css/app-purple.min.css')}} " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                <link href="{{asset('assets/css/bootstrap-purple-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                <link href="{{asset('assets/css/app-purple-dark.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled /> 
            @else
                @if(isset($demo) && $demo == 'saas')
                    <link href="{{asset('assets/css/bootstrap-saas.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                    <link href="{{asset('assets/css/app-saas.min.css')}} " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                    <link href="{{asset('assets/css/bootstrap-saas-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                    <link href="{{asset('assets/css/app-saas-dark.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />    
                @else
                    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
                    <link href="{{asset('assets/css/app.min.css')}} " rel="stylesheet" type="text/css" id="app-default-stylesheet" />
                    <link href="{{asset('assets/css/bootstrap-dark.min.css')}} " rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
                    <link href="{{asset('assets/css/app-dark.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet"  disabled />    
                    @endif
            @endif
        @endif
    @endif    
    @endif
@endif
