<div class="modal edit_exercise_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true" data-dismiss="modal">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if (isset($exercises) && $exercises->count() > 0)
                    <form action="{{ url('/editExercise/' . $exercise->id) }}" method="POST">
                        @csrf
                        <input type="text" class="form-control form-control-sm rounded-left" name="ExerciseName"
                            value="{{ $exercise->name }}" placeholder="Exercise name">
                        {{-- <p>Modal body text goes here.</p> --}}
            </div>
            <div class="modal-footer">

                <div class="input-group-append">
                    <button class="btn btn-success btn-sm rounded-right add_exercise" type="submit">edit
                        Exercise</button>
                </div>
                </form>
                @endif
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
