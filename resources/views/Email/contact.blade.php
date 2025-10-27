@component('mail::message')
    <p style="border-collapse: collapse; table-layout: fixed; width: 1000px;">
        Hi,<br />
        New enquiry has been initiated on The Compare Home Security
        <br />
        Following are the contact enquiry details.
    </p>
    <table style="border-collapse: collapse; table-layout: fixed; width: 1000px;">
        <tbody>
            @if (isset($enquiry['full_name']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Full Name</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $enquiry['full_name'] !!}</b></td>
                </tr>
            @endif
            @if (isset($enquiry['email']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Email</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $enquiry['email'] !!}</b></td>
                </tr>
            @endif
            @if (isset($enquiry['mobile']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Contact</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $enquiry['mobile'] !!}</b></td>
                </tr>
            @endif
            @if (isset($enquiry['subject']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Subject</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $enquiry['subject'] !!}</b></td>
                </tr>
            @endif
            @if (isset($enquiry['message']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Message</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $enquiry['message'] !!}</b></td>
                </tr>
            @endif
        </tbody>
    </table>
    <br />
    <br /><br />
    Thanks,<br>
    Sales Team,<br />
    Compare Home Security<br/>
@endcomponent
