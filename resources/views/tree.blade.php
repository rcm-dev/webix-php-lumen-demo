@extends('layouts.app')
@section('content')

<p>Hierarchical data can be loaded at once or on demand</p>
<div id='tree-container'></div>
<script>

var tree1 = {
	view:"tree",
	url:"/tree/data"
};

var tree2 = {
	view:"tree",
	template:"{common.space()}{common.icon()}{common.folder()}#name#",
	url:"/tree/data-dynamic"
};

webix.ui({
	width:640, type:"space",
	container:"tree-container",
	height: 600,
	cols:[
		{ rows:[
			{ type:"header", template:"Loading all at once" },
			tree1
		]},
		{ rows:[
			{ type:"header", template:"Dynamic data loading" },
			tree2
		]}
	]
});
</script>

@endsection