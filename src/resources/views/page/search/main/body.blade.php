<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="question-list">
                    @foreach($questionRecordList as $questionRecord)
                        <div class="question">
                            <div class="question-header">
                                <div class="question-title">
                                    <span>{{ $questionRecord['name'] }}</span>
                                    <i class="fa fa-angle-down"></i>
                                </div>
                                <div class="question-text">
                                    <input type="text" placeholder="{{ $questionRecord['inputPlaceholder'] }}">
                                </div>
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