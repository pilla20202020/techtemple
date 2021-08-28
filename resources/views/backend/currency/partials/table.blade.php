<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($currency->title, 47) }}</td>
    <td>{{ $currency->type}}</td>
    <td>{{ $currency->value}}</td>
{{--    <td class="text-center">{{ Carbon\Carbon::parse($currency->date)->format('Y-m-d') }}</td>--}}

   
    <td class="text-right">
        <a href="{{route('currency.edit', $currency->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
        <a href="{{ route('currency.destroy', $currency->id) }}">
            <button type="button" 
                    class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        </a>
    </td>
</tr>

