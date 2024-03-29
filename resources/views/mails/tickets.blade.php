@extends('layouts.email')

@section('content')
    <tr>
        <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                @foreach($data as $id => $spectacle)
                    <tr>
                        <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Spectacle Name: {{ $spectacle['model']->name }}</p>
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Author: {{ $spectacle['model']->author }}</p>
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Producer: {{ $spectacle['model']->producer }}</p>
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Date: {{ $spectacle['model']->start_at }}</p>
                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Places: {{ $spectacle['short_desc'] }}</p>
                        </td>
                    </tr>
                @endforeach
            </table>
        </td>
    </tr>
@endsection
