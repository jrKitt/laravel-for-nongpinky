<style>
    @import url("{{asset('css/project.css')}}");
</style>

@if(isset($project))
    <div class="form-container edit-form">
        <h1 class="form-title">Edit Project</h1>
        <form action="{{ url('/projects/' . $project->id) }}" method="POST">
            @csrf

            <div class="groupsform">
                <label for="namepj" class="form-label">Project Name</label>
                <input type="text" name="namepj" id="namepj" value="{{ $project->project_name }}" required placeholder="Project Name">
            </div>

            <div class="groupsform">
                <label for="budgetpj" class="form-label">Budget (THB)</label>
                <input type="number" name="budgetpj" id="budgetpj" value="{{ $project->budget }}" required placeholder="Budget">
            </div>

            <div class="groupsform">
                <label for="abbr" class="form-label">Laboratory</label>
                <select name="abbr" id="abbr">
                    <option value="">-- select lab --</option>
                    @foreach($labs as $lab)
                        <option value="{{ $lab->abbreviation }}"
                            {{ $project->lab_id == $lab->id ? 'selected' : '' }}>
                            {{ $lab->abbreviation }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn-submit">แก้ไขข้อมูล</button>
        </form>
    </div>
@else
    <div class="form-container">
        <h1 class="form-title">Add Project</h1>
        <form action="/projects/create" method="POST">
            @csrf
            <div class="groupsform">
                <label for="namepj" class="form-label">Project Name</label>
                <input type="text" name="namepj" id="namepj" required placeholder="Project Name">
            </div>
            <div class="groupsform">
                <label for="budgetpj" class="form-label">Budget (THB)</label>
                <input type="number" name="budgetpj" id="budgetpj" required placeholder="Budget">
            </div>
            <div class="groupsform">
                <label for="abbr" class="form-label">Laboratory</label>
                <select name="abbr" id="abbr">
                    <option value="">-- select lab --</option>
                    @foreach($items as $pj)
                    <option value="{{$pj->abbreviation}}">{{ $pj->abbreviation }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn-submit">บันทึกข้อมูล</button>
        </form>
    </div>
@endif
