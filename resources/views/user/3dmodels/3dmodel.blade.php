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

<script>
    let scene, camera, renderer;

    function init() {

        scene = new THREE.Scene();
        scene.background = new THREE.Color(0xffffff);

        camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 5000);
        camera.rotation.y = 45 / 180 * Math.PI;
        camera.position.x = -28.32075525949297;
        camera.position.y = 17.342529159278097;
        camera.position.z = 20.210352308588313;

        hlight = new THREE.AmbientLight(0x404040, 20);
        scene.add(hlight);

        directionalLight = new THREE.DirectionalLight(0xffffff, 10);
        directionalLight.position.set(0, 1, 10);
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
        renderer.outputEncoding = THREE.sRGBEncoding;
        document.body.appendChild(renderer.domElement);

        controls = new THREE.OrbitControls(camera, renderer.domElement);
        controls.addEventListener('change', renderer);

        let manager = new THREE.LoadingManager();
        manager.onStart = function ( url, itemsLoaded, itemsTotal ) {
            console.log( 'Started loading file: ' + url + '.\nLoaded ' + itemsLoaded + ' of ' + itemsTotal + ' files.' );
            let bodyMain = document.getElementsByName('body');
        };

        manager.onLoad = function ( ) {
            console.log( 'Loading complete!');
        };
        
        const textureLoader = new THREE.TextureLoader();
        
        const texture2 = textureLoader.load( 'http://litekk.test/3dmodels/phrbg/texture.jpg' );
        texture2.wrapS = THREE.RepeatWrapping;
        texture2.wrapT = THREE.RepeatWrapping;
        texture2.repeat.set( 4, 4 );
        texture2.needsUpdate = true;
        let loader = new THREE.GLTFLoader();
        loader.load(
            
            //цепляем модель из аргумента laravel
            "{{$path . '.gltf'}}", 
        
            function (gltf) {

                const material = new THREE.MeshStandardMaterial({
                    color: new THREE.Color("rgb(28, 112, 88)"),

                    metalness: 1,
                    map: texture2,
                    roughness: 0.16
                });
                product_mesh = gltf.scene.children[1];
                product_mesh.material = material
                product_mesh.scale.set(1.2, 1.2, 1.2);

                scene.add(product_mesh);
                animate();               
            }
        );

    }
    function animate() {
        renderer.render(scene, camera);
        requestAnimationFrame(animate);
    }
    init();
</script>
@endsection