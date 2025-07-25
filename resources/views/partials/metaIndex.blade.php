<!-- Place this data between the <head> tags of your website -->
    <meta name="title" content="{{$title}}"/>
    <meta name="description" content="{{$description}}" />
    <meta name="news_keywords" content="{{$description}}" />
    <meta name="geo.country" content="{{App::getLocale() }}" />
    <meta http-equiv="content-language" content="{{App::getLocale() }}" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="copyright" content="{{url()->full()}}">
    <meta name="creation date" content="2021">
    <meta name="keywords" content="mapbiomas fire, mapbiomas indonesia, mapbiomas fire, mapbiomas indonesia , deforestasi, shp, auriga nusantara, GIS, mapbiomas fire, mapbiomas indonesia , tutupan lahan, konsensi, consession, hgu, iup, kawasan hutan, land use, land status, google earth engine, pbph, kebakaran hutan, mapbiomas alerta">
    <link rel="canonical" href="{{url()->full()}}"/>
    <meta name="robots" content="index, follow">
    <meta name="author" content="MapBiomas">
    <meta name="googlebot-news" content="index, follow, follow" />
    <meta name="googlebot" content="index, follow, follow" />
    <meta name="coverage" content="MapBiomas" >

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AURIGA_ID">
    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:description" content="{{$description }}">
    <meta name="twitter:creator" content="@AURIGA_ID">
    <meta name="twitter:url" content="{{url()->full()}}" />
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image"  content="{{ asset('assets/1-thumbnail.png') }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->full()}}" />
    <!-- Facebook image must be at least 600x315px -->
    <meta property="og:image" content="{{ asset('assets/1-thumbnail.png') }}" />
    <meta property="og:description" content="{{$description }}" />
    <meta property="og:site_name" content="{{$title}}" />
    <meta property="article:tag" content="mapbiomas fire, mapbiomas indonesia, mapbiomas fire, mapbiomas indonesia , deforestasi, shp, auriga nusantara, GIS, mapbiomas fire, mapbiomas indonesia , tutupan lahan, konsensi, consession, hgu, iup, kawasan hutan, land use, land status, google earth engine, pbph, kebakaran hutan, mapbiomas alerta" />
