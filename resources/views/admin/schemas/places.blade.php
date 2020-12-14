@extends('layouts.admin')

<link rel="stylesheet" href="{{ asset('front/css/choose-place.css') }}">

@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} Choosen Places {{ trans('cruds.schemas.title_singular') }} "{{ $spectacle->schema->name }}" For Spectacle "{{ $spectacle->name }}"
    </div>
    <div class="card-body">
        <main class="main place">
            <div class="main-content">
                <div class="seats-map-wr">
                    <div class="seats-map">
                        <div class="swiper-slide">
                            <div class="seats-row d-flex">
                                <div class="seats-left pt1 ">
                                    @foreach($rows['balcony']['items'][20][$side = 'on_left'] as $col)
                                        @php
                                            $class = $loop->first ? 'ml1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side, 2) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['balcony']['items'][20]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['balcony']['items'][19][$side = 'on_left'] as $col)
                                        @php
                                            $class = $loop->last ? 'mr1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side, 2) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['balcony']['items'][19]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['balcony']['items'][18][$side = 'on_left'] as $col)
                                        @php
                                            $class = '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side, 2) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['balcony']['items'][18]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach
                                </div>
                                <div class="seats-num mr1 ml1">
                                    <span class="seat-num">{{ $vars['spectacle_map_balcon'] }}</span>
                                    <span class="seat-num">3</span>
                                    <span class="seat-num">2</span>
                                    <span class="seat-num">1</span>
                                </div>
                                <div class="seats-right pt1 ml1 pr1">

                                    @foreach($rows['balcony']['items'][20][$side = 'on_right'] as $col)
                                        @php
                                            $class = $loop->iteration === 3 ? 'mr1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side, 2) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['balcony']['items'][20]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['balcony']['items'][19][$side = 'on_right'] as $col)
                                        @php
                                            $class = '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side, 2) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['balcony']['items'][19]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['balcony']['items'][18][$side = 'on_right'] as $col)
                                        @php
                                            $class = '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side, 2) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['balcony']['items'][18]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach
                                </div>
                            </div>
                            <div class="seats-row d-flex">
                                <div class="seats-center-wr">
                                    <span class="seat-num">{{ $vars['spectacle_map_lodge'] }} {{ $vars['spectacle_map_balcon'] }}</span>
                                    <div class="seats-center">
                                        @foreach($rows['balcony']['loggia']['data'] as $col)
                                            <svg
                                                data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                                data-col-id="{{ $col['id'] }}"
                                                data-seat="{{ $col['seat'] }}"
                                                data-row-id="{{ $col['row_id'] }}"
                                                data-row="{{ $col['row'] }}"
                                                data-name="{{ TicketHelper::generateName($vars, $col, null, 2, true) }}"
                                                data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                                width="20"
                                                height="18"
                                                viewBox="0 0 20 18"
                                                fill="none"
                                                class="seats {{ $rows['balcony']['loggia']['color'] }} {{ $col['class'] }}"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="seats-row d-flex">
                                <div class="seats-left pl1 pr1">
                                    @foreach($rows['rows']['items'][13]['data'][$side = 'on_left'] as $col)
                                        @php
                                            $class = $loop->iteration === 1 ? 'ml1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][13]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][12]['data']['on_left'] as $col)
                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][12]['color'] }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][11]['data']['on_left'] as $col)
                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][11]['color'] }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][10]['data']['on_left'] as $col)
                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][10]['color'] }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][9]['data']['on_left'] as $col)
                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][9]['color'] }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach
                                </div>
                                <div class="seats-num mr1 ml1">
                                    <span class="seat-num">13</span>
                                    <span class="seat-num">12</span>
                                    <span class="seat-num">11</span>
                                    <span class="seat-num">10</span>
                                    <span class="seat-num">9</span>
                                </div>
                                <div class="seats-right pl1 pr1 mr1">
                                    @foreach($rows['rows']['items'][13]['data'][$side = 'on_right'] as $col)
                                        @php
                                            $class = $loop->last ? 'mr1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][13]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][12]['data'][$side = 'on_right'] as $col)
                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][12]['color'] }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][11]['data'][$side = 'on_right'] as $col)
                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][11]['color'] }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][10]['data'][$side = 'on_right'] as $col)
                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][10]['color'] }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][9]['data'][$side = 'on_right'] as $col)
                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][9]['color'] }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach
                                </div>
                            </div>
                            <div class="seats-row d-flex mb50">
                                <div class="seats-left pl2 pr1">
                                    @foreach($rows['rows']['items'][8]['data'][$side = 'on_left'] as $col)
                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][8]['color'] }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][7]['data'][$side = 'on_left'] as $col)
                                        @php
                                            $class = $loop->first ? 'ml1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][7]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][6]['data'][$side = 'on_left'] as $col)
                                        @php
                                            $class = $loop->first ? 'ml1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][6]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][5]['data'][$side = 'on_left'] as $col)
                                        @if($col['seat'] === 1)
                                            @continue
                                        @endif

                                        @php
                                            $class = $loop->iteration === 2 ? 'ml1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][5]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach
                                </div>
                                <div class="seats-num ml1 mr1">
                                    <span class="seat-num">8</span>
                                    <span class="seat-num">7</span>
                                    <span class="seat-num">6</span>
                                    <span class="seat-num">5</span>
                                </div>
                                <div class="seats-right pl1 pr1 mr1">
                                    @foreach($rows['rows']['items'][8]['data'][$side = 'on_right'] as $col)
                                        @php
                                            $class = $loop->last ? 'mr1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][8]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][7]['data'][$side = 'on_right'] as $col)
                                        @php
                                            $class = $loop->last ? 'mr2' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][7]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][6]['data'][$side = 'on_right'] as $col)
                                        @php
                                            $class = $loop->last ? 'mr2' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][6]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][5]['data'][$side = 'on_right'] as $col)
                                        @if($col['seat'] === 15)
                                            @continue
                                        @endif

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][5]['color'] }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach
                                </div>
                            </div>
                            <div class="seats-row d-flex mb25">
                                <div class="seats-left pl1">
                                    @foreach($rows['rows']['items'][4]['data'][$side = 'on_left'] as $col)
                                        @php
                                            $class = $loop->first ? 'ml1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][4]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][3]['data'][$side = 'on_left'] as $col)
                                        @php
                                            $class = $loop->first ? 'ml1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][3]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][2]['data'][$side = 'on_left'] as $col)
                                        @if($col['seat'] === 1)
                                            @continue
                                        @endif

                                        @php
                                            $class = $loop->iteration === 2 ? 'ml1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][2]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][1]['data'][$side = 'on_left'] as $col)
                                        @php
                                            $class = '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][1]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                </div>
                                <div class="seats-num">
                                    <span class="seat-num">4</span>
                                    <span class="seat-num">3</span>
                                    <span class="seat-num">2</span>
                                    <span class="seat-num">1</span>
                                </div>
                                <div class="seats-right mr1">
                                    @foreach($rows['rows']['items'][4]['data'][$side = 'on_right'] as $col)
                                        @php
                                            $class = $loop->last ? 'mr1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][4]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][3]['data'][$side = 'on_right'] as $col)
                                        @php
                                            $class = $loop->last ? 'mr1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][3]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][2]['data'][$side = 'on_right'] as $col)
                                        @if($col['seat'] === 20)
                                            @continue
                                        @endif

                                        @php
                                            $class = $col['seat'] === 19 ? 'mr1' : '';
                                        @endphp

                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][2]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach

                                    @foreach($rows['rows']['items'][1]['data'][$side = 'on_right'] as $col)
                                        @php
                                            $class = '';
                                        @endphp
                                        <svg
                                            data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                            data-col-id="{{ $col['id'] }}"
                                            data-seat="{{ $col['seat'] }}"
                                            data-row-id="{{ $col['row_id'] }}"
                                            data-row="{{ $col['row'] }}"
                                            data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                            data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                            width="20"
                                            height="18"
                                            viewBox="0 0 20 18"
                                            fill="none"
                                            class="seats {{ $rows['rows']['items'][1]['color'] }} {{ $class }} {{ $col['class'] }}"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                stroke="#97C992"/>
                                        </svg>
                                    @endforeach
                                </div>
                            </div>
                            <div class="seats-parter seats-parter-left">
                                <div class="seats-parter-block d-flex">
                                    <div class="parter-col">
                                        <span class="seat-num">{{ $vars['spectacle_map_first_floor'] }} </span>
                                        <span class="seat-num">{{ $vars['spectacle_map_lodge'] }} 2</span>
                                        <span class="seat-num">{{ $vars['spectacle_map_right'] }}</span>
                                    </div>
                                    <div class="parter-col">
                                        @foreach(array_reverse($rows['rows']['loggia'][14]['data'][$side = 'on_left']) as $col)
                                            @php
                                                $class = '';
                                            @endphp

                                            <svg
                                                data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                                data-col-id="{{ $col['id'] }}"
                                                data-seat="{{ $col['seat'] }}"
                                                data-row-id="{{ $col['row_id'] }}"
                                                data-row="{{ $col['row'] }}"
                                                data-name="{{ TicketHelper::generateName($vars, $col, $side, 1, true) }}"
                                                data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                                width="20"
                                                height="18"
                                                viewBox="0 0 20 18"
                                                fill="none"
                                                class="seats {{ $rows['rows']['loggia'][14]['color'] }} {{ $class }} {{ $col['class'] }}"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                        @endforeach

                                        @foreach($rows['rows']['items'][5]['data'][$side = 'on_left'] as $col)
                                            @if($col['seat'] === 1)
                                                @php
                                                    $class = '';
                                                @endphp

                                                <svg
                                                    data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                                    data-col-id="{{ $col['id'] }}"
                                                    data-seat="{{ $col['seat'] }}"
                                                    data-row-id="{{ $col['row_id'] }}"
                                                    data-row="{{ $col['row'] }}"
                                                    data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                                    data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                                    width="20"
                                                    height="18"
                                                    viewBox="0 0 20 18"
                                                    fill="none"
                                                    class="seats {{ $rows['rows']['items'][5]['color'] }} {{ $class }} {{ $col['class'] }}"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                        stroke="#97C992"/>
                                                </svg>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="seats-parter-block d-flex">
                                    <div class="parter-col">
                                        <span class="seat-num">{{ $vars['spectacle_map_first_floor'] }} </span>
                                        <span class="seat-num">{{ $vars['spectacle_map_lodge'] }} 1</span>
                                        <span class="seat-num">{{ $vars['spectacle_map_right'] }}</span>
                                    </div>
                                    <div class="parter-col">
                                        @foreach(array_reverse($rows['rows']['loggia'][15]['data'][$side = 'on_left']) as $col)
                                            @php
                                                $class = '';
                                            @endphp

                                            <svg
                                                data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                                data-col-id="{{ $col['id'] }}"
                                                data-seat="{{ $col['seat'] }}"
                                                data-row-id="{{ $col['row_id'] }}"
                                                data-row="{{ $col['row'] }}"
                                                data-name="{{ TicketHelper::generateName($vars, $col, $side, 1, true) }}"
                                                data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                                width="20"
                                                height="18"
                                                viewBox="0 0 20 18"
                                                fill="none"
                                                class="seats {{ $rows['rows']['loggia'][15]['color'] }} {{ $class }} {{ $col['class'] }}"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                        @endforeach

                                        @foreach($rows['rows']['items'][2]['data'][$side = 'on_left'] as $col)
                                            @if($col['seat'] === 1)
                                                @php
                                                    $class = '';
                                                @endphp
                                                <svg
                                                    data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                                    data-col-id="{{ $col['id'] }}"
                                                    data-seat="{{ $col['seat'] }}"
                                                    data-row-id="{{ $col['row_id'] }}"
                                                    data-row="{{ $col['row'] }}"
                                                    data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                                    data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                                    width="20"
                                                    height="18"
                                                    viewBox="0 0 20 18"
                                                    fill="none"
                                                    class="seats {{ $rows['rows']['items'][2]['color'] }} {{ $class }} {{ $col['class'] }}"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                        stroke="#97C992"/>
                                                </svg>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="seats-parter seats-parter-right">
                                <div class="seats-parter-block d-flex">
                                    <div class="parter-col">
                                        <span class="seat-num">{{ $vars['spectacle_map_first_floor'] }} </span>
                                        <span class="seat-num">{{ $vars['spectacle_map_lodge'] }} 2</span>
                                        <span class="seat-num">{{ $vars['spectacle_map_left'] }}</span>
                                    </div>
                                    <div class="parter-col">
                                        @foreach(array_reverse($rows['rows']['loggia'][16]['data'][$side = 'on_right']) as $col)
                                            @php
                                                $class = '';
                                            @endphp

                                            <svg
                                                data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                                data-col-id="{{ $col['id'] }}"
                                                data-seat="{{ $col['seat'] }}"
                                                data-row-id="{{ $col['row_id'] }}"
                                                data-row="{{ $col['row'] }}"
                                                data-name="{{ TicketHelper::generateName($vars, $col, $side, 1, true) }}"
                                                data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                                width="20"
                                                height="18"
                                                viewBox="0 0 20 18"
                                                fill="none"
                                                class="seats {{ $rows['rows']['loggia'][16]['color'] }} {{ $class }} {{ $col['class'] }}"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                        @endforeach

                                        @foreach($rows['rows']['items'][5]['data'][$side = 'on_right'] as $col)
                                            @if($col['seat'] === 15)
                                                @php
                                                    $class = '';
                                                @endphp
                                                <svg
                                                    data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                                    data-col-id="{{ $col['id'] }}"
                                                    data-seat="{{ $col['seat'] }}"
                                                    data-row-id="{{ $col['row_id'] }}"
                                                    data-row="{{ $col['row'] }}"
                                                    data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                                    data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                                    width="20"
                                                    height="18"
                                                    viewBox="0 0 20 18"
                                                    fill="none"
                                                    class="seats {{ $rows['rows']['items'][5]['color'] }} {{ $class }} {{ $col['class'] }}"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                        stroke="#97C992"/>
                                                </svg>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="seats-parter-block d-flex">
                                    <div class="parter-col">
                                        <span class="seat-num">{{ $vars['spectacle_map_first_floor'] }}</span>
                                        <span class="seat-num">{{ $vars['spectacle_map_lodge'] }} 1</span>
                                        <span class="seat-num">{{ $vars['spectacle_map_left'] }}</span>
                                    </div>
                                    <div class="parter-col">
                                        @foreach(array_reverse($rows['rows']['loggia'][17]['data'][$side = 'on_right']) as $col)
                                            @php
                                                $class = '';
                                            @endphp

                                            <svg
                                                data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                                data-col-id="{{ $col['id'] }}"
                                                data-seat="{{ $col['seat'] }}"
                                                data-row-id="{{ $col['row_id'] }}"
                                                data-row="{{ $col['row'] }}"
                                                data-name="{{ TicketHelper::generateName($vars, $col, $side, 1, true) }}"
                                                data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                                width="20"
                                                height="18"
                                                viewBox="0 0 20 18"
                                                fill="none"
                                                class="seats {{ $rows['rows']['loggia'][17]['color'] }} {{ $class }} {{ $col['class'] }}"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                    stroke="#97C992"/>
                                            </svg>
                                        @endforeach

                                        @foreach($rows['rows']['items'][2]['data'][$side = 'on_right'] as $col)
                                            @if($col['seat'] === 20)
                                                @php
                                                    $class = '';
                                                @endphp

                                                <svg
                                                    data-uid="{{ $col['active'] ? $col['id'] : '' }}"
                                                    data-col-id="{{ $col['id'] }}"
                                                    data-seat="{{ $col['seat'] }}"
                                                    data-row-id="{{ $col['row_id'] }}"
                                                    data-row="{{ $col['row'] }}"
                                                    data-name="{{ TicketHelper::generateName($vars, $col, $side) }}"
                                                    data-toggle="{{ isset($col['name']) ? 'tooltip' : '' }}" data-placement="top" title="{{ $col['name'] ?? '' }}"
                                                    width="20"
                                                    height="18"
                                                    viewBox="0 0 20 18"
                                                    fill="none"
                                                    class="seats {{ $rows['rows']['items'][2]['color'] }} {{ $class }} {{ $col['class'] }}"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.39362 3.54634C2.62144 1.80354 4.10646 0.5 5.8641 0.5H14.1359C15.8935 0.5 17.3786 1.80354 17.6064 3.54634L19.4304 17.5H0.569613L2.39362 3.54634Z"
                                                        stroke="#97C992"/>
                                                </svg>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="seats-buy-btn d-660">
                            <a href="#" class="btn-buy">{{ $vars['spectacle_map_scene'] }}</a>
                        </div>
                    </div>
                    <div class="seats-buy-btn m-660">
                        <a href="#" class="btn-buy">{{ $vars['spectacle_map_scene'] }}</a>
                    </div>
                    <div class="seats-pricing d-flex">
                        @foreach($spectacle->schema->colors as $color)
                            @if ($color->name === 'busy')
                                @continue
                            @endif
                            <span class="{{ $color->name }}">{{ $color->data->price }} lei</span>
                        @endforeach
                        <span class="busy">{{ __('global.busy') }}</span>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        {{ trans('global.orders') }} {{ trans('global.list') }}
                    </div>

                    <div class="card-body">
                        <table class=" table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>
                                    {{ trans('cruds.base.fields.id') }}
                                </th>
                                <th>
                                    {{ trans('cruds.orders.fields.first_name') }}
                                </th>
                                <th>
                                    {{ trans('cruds.orders.fields.last_name') }}
                                </th>
                                <th>
                                    {{ trans('cruds.orders.fields.phone') }}
                                </th>
                                <th>
                                    {{ trans('cruds.orders.fields.email') }}
                                </th>
                                <th>
                                    {{ trans('cruds.orders.fields.total') }}
                                </th>
                                <th>
                                    {{ trans('cruds.orders.fields.short_desc') }}
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($spectacle->orders as $order)
                                <tr data-entry-id="{{ $order->id }}">
                                    <td>
                                        {{ $order->id }}
                                    </td>
                                    <td>
                                        {{ $order->first_name }}
                                    </td>
                                    <td>
                                        {{ $order->last_name }}
                                    </td>
                                    <td>
                                        {{ $order->phone }}
                                    </td>
                                    <td>
                                        {{ $order->email }}
                                    </td>
                                    <td>
                                        {{ $order->total }} lei
                                    </td>
                                    <td>
                                        {{ $order->short_desc }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="table-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

@endsection

@section('scripts')
    @parent
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });
    </script>
@endsection
