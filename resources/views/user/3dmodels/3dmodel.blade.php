@extends('layouts.3d')

@section('content')
<div class="information-scene">
    <span>Описание управления положением 3d модели с помощью мыши:</span><br>
    - Зажать левую кавишу и двигать мышью - крутить модель товара<br>
    - Зажать правую клавишу и двикать мышью - перемещение модели по окну браузера<br>
    - Колесо мыши - приблизить/отдалить модель товара
</div>
<script src="{{ asset('js/components/three.js')}}"></script>
<script src="{{ asset('js/components/gltfloader.js')}}"></script>
<script src="{{ asset('js/components/orbitcontrols.js')}}"></script>
{{-- <script src="{{ asset('js/components/scene.js')}}"></script> --}}
<script> 
    // Scene({{asset('3dmodels/' . $path . '/' . $path . '.gltf')}});
    // Scene('{{$path}}');

    let scene, camera, renderer;

    function init() {

        scene = new THREE.Scene();
        scene.background = new THREE.Color(0xdddddd);

        camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 5000);
        camera.rotation.y = 45 / 180 * Math.PI;
        camera.position.x = -1000;
        camera.position.y = 600;
        camera.position.z = 1400;



        hlight = new THREE.AmbientLight(0x404040, 100);
        scene.add(hlight);

        directionalLight = new THREE.DirectionalLight(0xffffff, 100);
        directionalLight.position.set(0, 1, 0);
        directionalLight.castShadow = true;
        scene.add(directionalLight);
        light = new THREE.PointLight(0xc4c4c4, 10);
        light.position.set(0, 300, 500);
        scene.add(light);
        light2 = new THREE.PointLight(0xc4c4c4, 10);
        light2.position.set(500, 100, 0);
        scene.add(light2);
        light3 = new THREE.PointLight(0xc4c4c4, 10);
        light3.position.set(0, 100, -500);
        scene.add(light3);
        light4 = new THREE.PointLight(0xc4c4c4, 10);
        light4.position.set(-500, 300, 500);
        scene.add(light4);

        renderer = new THREE.WebGLRenderer({ antialias: true });
        renderer.setSize(window.innerWidth, window.innerHeight);
        document.body.appendChild(renderer.domElement);

        controls = new THREE.OrbitControls(camera, renderer.domElement);
        controls.addEventListener('change', renderer);

        let loader = new THREE.GLTFLoader();

        loader.load('{{$path}}', function (gltf) {
            console.log(gltf);
            product = gltf.scene.children[1];
            product.scale.set(50, 50, 50);
            scene.add(gltf.scene);
            animate();
        });
    }
    function animate() {
        renderer.render(scene, camera);
        requestAnimationFrame(animate);
    }
    init();
</script>
@endsection