<div class="mt-3">
    <table>
        <tbody>
            <tr>
                <td>
                    Organization
                </td>
                <td>
                   : {{ $job_items->company_name }}
                </td>
            </tr>
            <tr>
                <td>
                    Type
                </td>
                <td>
                   : {{ $job_items->company_type }}
                </td>
            </tr>
             <tr>
                <td>
                    District
                </td>
                <td>
                   : {{ $job_items->district_name }}
                </td>
            </tr>
             <tr>
                <td>
                    Location
                </td>
                <td>
                   : {{ $job_items->location }}
                </td>
            </tr>
             <tr>
                <td>
                    Start Date
                </td>
                <td>
                   : <span class="text-success">{{ \Carbon\Carbon::parse($job_items->start_date)->format('d-M-Y') }} ({{ \Carbon\Carbon::parse($job_items->start_date)->diffForHumans() }})</span>
                </td>
            </tr>
             <tr @if($job_items->deadline < \Carbon\Carbon::now()) class="bg-danger"  @endif>
                <td>
                    Dateline
                </td>
                <td>
                   : <span class="text-dark">{{  \Carbon\Carbon::parse($job_items->deadline)->format('d-M-Y') }} </span>
                   <span class="text-decoration-underline">({{  \Carbon\Carbon::parse($job_items->deadline)->diffForHumans() }})</span>
                </td>
            </tr>

        </tbody>
    </table>
</div>
