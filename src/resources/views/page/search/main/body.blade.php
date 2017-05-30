<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="question-list">
                    @foreach($questionRecordList as $questionRecord)
                        <div class="question">
                            <div class="question-header">
                                <ul class="temp-list">
                                    <li class="temp question-title">
                                        <a href="#" class="temp-link">
                                            {{ $questionRecord['name'] }}
                                        </a>
                                        <i class="fa fa-angle-down"></i>
                                    </li>
                                    <li class="temp question-text">
                                        <input type="text" placeholder="{{ $questionRecord['inputPlaceholder'] }}">
                                    </li>
                                </ul>
                            </div>
                            <div class="question-body">
                                <ul class="filter-list">
                                    @foreach($questionRecord['filterRecordList'] as $filterRecord)
                                        <li class="filter">
                                            <a href="{{ url($filterRecord['uri']) }}">{{ $filterRecord['name'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="answer-list">

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" href="{{ url('/js/search.js') }}"></script>
</body>