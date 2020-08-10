@csrf 

<label>
		Título del proyecto <br>

	<input type="text" name="title" value="{{ old('title', $project->title)}}">
	
	</label>
	<br>
	<br>

	<label>
		URL del proyecto <br>

	<input type="text" name="url" value="{{ old('url', $project->url) }}" >

	</label>
	<br>
	<br>
	<label>
		Descripción del proyecto <br>

	<textarea name="description"  value="{{ old('description',$project->description)}"></textarea>

	</label>
	<br>