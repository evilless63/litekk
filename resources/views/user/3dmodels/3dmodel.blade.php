
<p>{{$path}}</p>

<script src="{{ asset('js/components/threebundle.js')}}"></script>
<script> 
    // Scene({{asset('3dmodels/' . $path . '/' . $path . '.gltf')}});
    Scene('{{$path}}');
</script>