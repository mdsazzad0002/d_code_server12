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
                   : <span class="text-success">{{ \Carbon\Carbon::parse($job_items->start_date)->format('d-M-Y') }}</span>
                </td>
            </tr>
             <tr >
                <td>
                    Dadeline
                </td>
                <td>
                   : <span class="text-dark">{{  \Carbon\Carbon::parse($job_items->deadline)->format('d-M-Y') }}</span>
                </td>
            </tr>

        </tbody>
    </table>
</div>
