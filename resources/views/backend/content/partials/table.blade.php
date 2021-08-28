<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($content->title, 47) }}</td>
    <td>{!!$content->content!!}</td>
{{--    <td class="text-center">{{ Carbon\Carbon::parse($content->date)->format('Y-m-d') }}</td>--}}

   
    <td class="text-right">
        <a href="{{route('content.edit', $content->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
        <a href="{{ route('content.destroy', $content->id) }}">
            <button type="button" 
                    class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        </a>
    </td>
</tr>

