
<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $project->title) }}">
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" name="description" id="description" value="{{ old('description', $project->description) }}">
</div>
<div class="mb-3">
    <label for="project_url" class="form-label">Project URL</label>
    <input type="text" class="form-control" name="project_url" id="project_url" value="{{ old('projects_url', $project->project_url) }}">
</div>
<div class="mb-3">
    <label for="used_languages" class="form-label">Used Languages</label>
    <input type="text" class="form-control" name="used_languages" id="used_languages" value="{{ old('used_languages', $project->used_languages) }}">
</div>
