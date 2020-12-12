@extends('layouts.admin')

<link rel="stylesheet" href="{{ asset('front/css/choose-place.css') }}">

@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.schemas.title_singular') }} "{{ $schema->name }}"
    </div>

    <div class="card-body">
        <main class="main place">
            <div class="main-content">
                <div class="detail-seats detail-col">
                    <div class="seats-map-wr">
                        <div class="seats-map">
                            <div class="swiper-slide">
                                <div class="seats-row d-flex">
                                    <div class="seats-left pt1 ">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active  ml1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active  mr1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    </div>
                                    <div class="seats-num mr1 ml1">
                                        <span class="seat-num">Balcon</span>
                                        <span class="seat-num">3</span>
                                        <span class="seat-num">2</span>
                                        <span class="seat-num">1</span>
                                    </div>
                                    <div class="seats-right pt1 ml1 pr1">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active  mr1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="green active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="seats-row d-flex">
                                    <div class="seats-center-wr">
                                        <span class="seat-num">Loja balcon</span>
                                        <div class="seats-center">
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="seats-row d-flex">
                                    <div class="seats-left pl1 pr1">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active  ml1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <!-- purple seats -->
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    </div>
                                    <div class="seats-num mr1 ml1">
                                        <span class="seat-num">13</span>
                                        <span class="seat-num">12</span>
                                        <span class="seat-num">11</span>
                                        <span class="seat-num">10</span>
                                        <span class="seat-num">9</span>
                                    </div>
                                    <div class="seats-right pl1 pr1 mr1">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active  mr1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="blue active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="seats-row d-flex mb50">
                                    <div class="seats-left pl2 pr1">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active  ml1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active  ml1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active  ml1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    </div>
                                    <div class="seats-num ml1 mr1">
                                        <span class="seat-num">8</span>
                                        <span class="seat-num">7</span>
                                        <span class="seat-num">6</span>
                                        <span class="seat-num">5</span>
                                    </div>
                                    <div class="seats-right pl1 pr1 mr1">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active  mr1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active  mr2"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active  mr2"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="seats-row d-flex mb25">
                                    <div class="seats-left pl1">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active  ml1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <!-- yellow -->
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active  ml1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <!-- divider -->
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active  ml1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <!-- divider -->
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    </div>
                                    <div class="seats-num">
                                        <span class="seat-num">4</span>
                                        <span class="seat-num">3</span>
                                        <span class="seat-num">2</span>
                                        <span class="seat-num">1</span>
                                    </div>
                                    <div class="seats-right mr1">
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active  mr1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <!-- yellow -->
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active  mr1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <!-- divider -->
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active  mr1"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <!-- divider -->
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="purple active "
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="seats-parter seats-parter-left">
                                    <div class="seats-parter-block d-flex">
                                        <div class="parter-col">
                                            <span class="seat-num">Parter</span>
                                            <span class="seat-num">Loja 2</span>
                                            <span class="seat-num">Dreapta</span>
                                        </div>
                                        <div class="parter-col">
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="seats-parter-block d-flex">
                                        <div class="parter-col">
                                            <span class="seat-num">Parter</span>
                                            <span class="seat-num">Loja 1</span>
                                            <span class="seat-num">Dreapta</span>
                                        </div>
                                        <div class="parter-col">
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="seats-parter seats-parter-right">
                                    <div class="seats-parter-block d-flex">
                                        <div class="parter-col">
                                            <span class="seat-num">Parter</span>
                                            <span class="seat-num">Loja 2</span>
                                            <span class="seat-num">Stanga</span>
                                        </div>
                                        <div class="parter-col">
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="seats-parter-block d-flex">
                                        <div class="parter-col">
                                            <span class="seat-num">Parter</span>
                                            <span class="seat-num">Loja 1</span>
                                            <span class="seat-num">Stanga</span>
                                        </div>
                                        <div class="parter-col">
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="red active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" class="yellow active "
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="seats-buy-btn d-660">
                                <a href="#" class="btn-buy">{{ __('global.scene') }}</a>
                            </div>
                        </div>
                        <div class="seats-buy-btn m-660">
                            <a href="#" class="btn-buy">{{ __('global.scene') }}</a>
                        </div>
                        <div class="seats-pricing d-flex">
                            @foreach($schema->colors as $color)
                                @if ($color->name === 'busy')
                                    @continue
                                @endif
                                <span class="{{ $color->name }}">{{ $color->data->price }} lei</span>
                            @endforeach
                            <span class="busy">{{ __('global.busy') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection

