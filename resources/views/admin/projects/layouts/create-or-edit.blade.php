
<div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $project->title) }}">
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" name="description" id="description" value="{{ old('description', $project->description) }}">
</div>
<div class="mb-3">
    <label for="thumb" class="form-label">Project URL</label>
    <input type="text" class="form-control" name="thumb" id="thumb" value="{{ old('projects_url', $project->project_url) }}">
</div>
<div class="mb-3">
    <label for="price" class="form-label">Used Languages</label>
    <input type="text" class="form-control" name="price" id="price" value="{{ old('used_languages', $project->used_languages) }}">
</div>
