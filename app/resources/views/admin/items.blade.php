@foreach ($tasks as $task)
    <tr>
        <td class="min-w-175px">
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <img src="{{ isset($task->picture) ? URL::asset('/files/clients/'.$task->picture) : URL::asset('/assets/media/logos/ka.png')  }}" class="mw-50px" alt="" />
                    
                </div>
                <div class="d-flex justify-content-start flex-column">
                    <a href="{{ route('view-project', ['submissions', 'id' => $task->id_project]) }}" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $task->project_name }}</a>
                    <div class="text-dark fw-bold fs-7">
                        <a href="{{ route('view-client', ['general', 'id' => $task->id_client]) }}">
                            {{ $task->client_name }}
                        </a>
                    </div>
                    <span class="fs-7 text-muted fw-bold">{{ $task->product_type }}</span>
                    <div class="text-muted fw-semibold d-block fs-7">
                        <span class="badge" style="color:{{ $task->status_client_color }}; background-color: {{ convertOpacity($task->status_client_color) }};">
                            {{ __('babel.'.$task->status_client) }}
                        </span>
                    </div>
                </div>
            </div>
        </td>
        <td>
            <div class="text-dark fw-bold">
                <a href="{{ route('view-submission', ['id' => $task->id_submission]) }}">{{ $task->practice_name }}</a>
            </div>
            <div class="d-flex gap-2 mb-0">
                {{ $task->location_name }} ({{ $task->guide_name }})
            </div>
            <div class="d-flex gap-2 mb-0">
                {{ $task->directory_name }}
            </div>
        </td>
        <td>
            <div class="mb-2 fw-bold">
                <div class="text-{{ App\Repositories\WlmRepositories::setDeadlineStatus($task) }}">
                    @if (isset($task->agreed_deadline))
                        @php
                            $agreedDate = new DateTime($task->agreed_deadline, new DateTimeZone(Auth::user()->timezone ?? 'UTC'));
                        @endphp
                        {{ $agreedDate->format('d/m/Y'); }}
                    @endif
                </div>
            </div>
        </td>
        <td>
            <div class="mb-2 fw-bold">
                <div class="text-{{ App\Repositories\WlmRepositories::setDeadlineStatus($task) }}"  id="tooltip-{{ $task->id_submission }}"
                    @if($task->confirmed == 1)
                        data-bs-toggle="tooltip" data-bs-html="true" title="Confirmed" style="text-decoration: underline"
                    @endif
                >
                    @if (isset($task->deadline))
                        @php
                            $date = new DateTime($task->deadline, new DateTimeZone(Auth::user()->timezone ?? 'UTC'));
                        @endphp
                        {{ $date->format('d/m/Y'); }}
                    @endif
                </div>
            </div>
        </td>
        <td>
            <div class="symbol-group symbol-hover my-1">
                <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Owner: {{$task->owner_name}}">
                    <span class="symbol-label bg-primary text-inverse-primary fw-bold fs-8">{{ preg_filter('/[^A-Z]/', '', $task->owner_name) }}</span>
                </div>
                <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Senior Consultant: {{$task->sc_name}}">
                    <span class="symbol-label bg-warning text-inverse-warning fw-bold fs-8">{{ preg_filter('/[^A-Z]/', '', $task->sc_name) }}</span>
                </div>
                <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Consultant: {{$task->consultant_name}}">
                    <span class="symbol-label bg-info text-inverse-info fw-bold fs-8">{{ preg_filter('/[^A-Z]/', '', $task->consultant_name) }}</span>
                </div>
                <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="LDS: {{$task->lds_name}}">
                    <span class="symbol-label bg-success text-inverse-success fw-bold fs-8">{{ preg_filter('/[^A-Z]/', '', $task->lds_name) }}</span>
                </div>
                <div class="symbol symbol-25px symbol-circle" data-bs-toggle="tooltip" title="Coordinator: {{$task->coord_name}}">
                    <span class="symbol-label bg-danger text-inverse-danger fw-bold fs-8">{{ preg_filter('/[^A-Z]/', '', $task->coord_name) }}</span>
                </div>
            </div>
        </td>

        <td>
            <span id="td-{{ $task->id_submission }}">
                <a id="aPopup-{{ $task->id_submission }}" href="#" onclick="openPopup({{ $task->id_submission }}, '{{ $task->status_c }}'); return false;" data-bs-toggle="tooltip" data-bs-html="true" title="
                    @if ($task->status_c)
                        <b>{{ __('babel.'.$task->status_c)}} : </b>{{ $task->status_description }}
                    @else
                        Create status
                    @endif">
                    <span class="badge" style="
                        @if ($task->html_color)
                            color:{{ $task->html_color }};
                            background: {{ convertOpacity($task->html_color) }}
                        @else
                            color:#70AD47;
                            background: {{ convertOpacity('#70AD47')}}
                        @endif
                    ">
                        @if (isset($task->status_c))
                            {{ __('babel.'.$task->status_c) }}
                        @else
                            New
                        @endif
                    </span>
                </a>
            </span>
        </td>
    </tr>
@endforeach

<script>

</script>