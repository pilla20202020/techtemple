<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($contact->name, 47) }}</td>
    <td>{{ $contact->email}}</td>
    <td>{{ $contact->phone}}</td>
    <td>{{ $contact->country}}</td>
    <td>{{ $contact->message}}</td>
{{--    <td class="text-center">{{ Carbon\Carbon::parse($contact->date)->format('Y-m-d') }}</td>--}}

   
    <td class="text-right">
        <a href="{{ route('contact.destroy', $contact->id) }}">
            <button type="button" 
                    class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        </a>
    </td>
</tr>

