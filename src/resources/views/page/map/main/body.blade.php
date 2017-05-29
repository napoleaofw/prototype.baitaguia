<body>
    {{ dump($routeRecordList) }}
    <ul>
        @foreach($routeRecordList as $routeRecord)
            <li>
                @if($routeRecord->action['middleware'] === 'web')
                    <a href="{{ url($routeRecord->uri) }}">{{ url($routeRecord->uri) }}</a>
                @endif
            </li>
        @endforeach
    </ul>
</body>