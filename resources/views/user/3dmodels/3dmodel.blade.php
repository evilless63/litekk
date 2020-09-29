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
        // scene.background = new THREE.Color(0xffffff);
        scene.background = new THREE.Color("rgb(251, 241, 231)");

        camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 5000);
        camera.rotation.y = 45 / 180 * Math.PI;
        camera.position.x = -28.32075525949297;
        camera.position.y = 17.342529159278097;
        camera.position.z = 20.210352308588313;

        hlight = new THREE.AmbientLight(0x404040, 1);
        scene.add(hlight);

        directionalLight = new THREE.DirectionalLight(0xffffff, 1);
        directionalLight.position.set(0, 1, 10);
        directionalLight.castShadow = true;
        scene.add(directionalLight);
        light = new THREE.PointLight(0xc4c4c4, 1);
        light.position.set(0, 300, 500);
        scene.add(light);
        light2 = new THREE.PointLight(0xc4c4c4, 1);
        light2.position.set(500, 100, 0);
        scene.add(light2);
        light3 = new THREE.PointLight(0xc4c4c4, 1);
        light3.position.set(0, 100, -500);
        scene.add(light3);
        light4 = new THREE.PointLight(0xc4c4c4, 1);
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
        let loader = new THREE.GLTFLoader();
        loader.load(
            
            //цепляем модель из аргумента laravel
            "{{$path . '.gltf'}}", 
        
            function (gltf) {

                let GltfMeshArray = gltf.scene
                console.log(GltfMeshArray)
                if(GltfMeshArray.children[1] !== undefined) {
                    GltfMeshArray.children[1].scale.set(1.2, 1.2, 1.2); // let baza

                    if(GltfMeshArray.children[1].name == "pokryshki005") {
                        newColor =  new THREE.Color("rgb(39, 39, 37)")
                    } else if(GltfMeshArray.children[1].name == "b_p2rn") {
                        newColor =  new THREE.Color("rgb(253, 216, 76)")
                    } else if(GltfMeshArray.children[1].name == "b_pet") {
                        newColor =  new THREE.Color("rgb(82, 37, 31)")
                    } else {
                        newColor = new THREE.Color("rgb(55, 119, 95)")
                    }

                    GltfMeshArray.children[1].material = new THREE.MeshStandardMaterial({
                        color: newColor,
                        metalness: 1,
                        roughness: 0.4
                    });
                }   

                if(GltfMeshArray.children[2] !== undefined) {
                    GltfMeshArray.children[2].scale.set(1.2, 1.2, 1.2); // let pokryshki

                    if(GltfMeshArray.children[2].name == "pokryshki004") {
                        newColor = new THREE.Color("rgb(197, 123, 124)")
                    } else if(GltfMeshArray.children[2].name == "pokryshki008") {
                        newColor = new THREE.Color("rgb(43, 41, 29)")
                    } else if(GltfMeshArray.children[2].name == "p_pet") {
                        newColor = new THREE.Color("rgb(120, 119, 115)") 
                    } else {
                        newColor =  new THREE.Color("rgb(39, 39, 37)")
                    }

                    GltfMeshArray.children[2].material = new THREE.MeshStandardMaterial({
                        color: newColor,
                        metalness: 1,
                        roughness: 0.4
                    });
                }

                if(GltfMeshArray.children[3] !== undefined) {
                    
                    GltfMeshArray.children[3].scale.set(1.2, 1.2, 1.2); // let kolpaki

                    if(GltfMeshArray.children[3].name == "stoiki004") {
                        newColor = new THREE.Color("rgb(155, 154, 152)") 
                    } else if (
                        GltfMeshArray.children[3].name == "stoiki005" || 
                        GltfMeshArray.children[3].name == "stoiki007" ||
                        GltfMeshArray.children[3].name == "stoiki008"
                    ) {
                        newColor = new THREE.Color("rgb(155, 154, 152)") 
                    } else if( GltfMeshArray.children[3].name ==  "kolpaki005") {
                        newColor =  new THREE.Color("rgb(197, 123, 124)")
                    } else if(GltfMeshArray.children[3].name == "kolpaki002"
                    || GltfMeshArray.children[3].name ==  "kolpaki003") {
                        newColor = new THREE.Color("rgb(120, 119, 115)") 
                    } else if(GltfMeshArray.children[3].name == "k_pet"
                    || GltfMeshArray.children[3].name == "stoiki009") {
                        newColor =  new THREE.Color("rgb(39, 39, 37)")
                    } else {
                        newColor =  new THREE.Color("rgb(43, 41, 29)")
                    }
                    GltfMeshArray.children[3].material = new THREE.MeshStandardMaterial({
                        
                        color: newColor,
                        metalness: 1,
                        roughness: 0.4
                    });
                }

                if(GltfMeshArray.children[4] !== undefined) {
                    GltfMeshArray.children[4].scale.set(1.2, 1.2, 1.2); // let stoiki

                    if(GltfMeshArray.children[4].name == "pokryshki009") {
                        newColor = new THREE.Color("rgb(43, 41, 29)") 
                    } else if(GltfMeshArray.children[4].name == "b2_p2rv") {
                        newColor = new THREE.Color("rgb(72, 61, 67)") 
                    } else {
                        newColor =  new THREE.Color("rgb(155, 154, 152)")
                    }

                    GltfMeshArray.children[4].material = new THREE.MeshStandardMaterial({
                        color: newColor,
                        metalness: 1,
                        roughness: 0.4
                    });
                }
                

                if(GltfMeshArray.children[5] !== undefined) {

                    if(GltfMeshArray.children[5].name == "stoiki010") {
                        newColor = new THREE.Color("rgb(155, 154, 152)") 
                    } else {
                        newColor =  new THREE.Color("rgb(74, 63, 69)")
                    }

                    GltfMeshArray.children[5].material = new THREE.MeshStandardMaterial({
                        color: newColor,
                        metalness: 1,
                        roughness: 0.4
                    });
                    GltfMeshArray.children[5].scale.set(1.2, 1.2, 1.2); // let stoiki
                }
                

                if(GltfMeshArray.children[6] !== undefined) {
                    GltfMeshArray.children[6].material = new THREE.MeshStandardMaterial({
                        color: new THREE.Color("rgb(74, 63, 69)"),
                        metalness: 1,
                        roughness: 0.4
                    });
                    GltfMeshArray.children[6].scale.set(1.2, 1.2, 1.2); // let stoiki
                }

                if(GltfMeshArray.children[7] !== undefined) {
                    GltfMeshArray.children[7].material = new THREE.MeshStandardMaterial({
                        color: new THREE.Color("rgb(74, 63, 69)"),
                        metalness: 1,
                        roughness: 0.4
                    });
                    GltfMeshArray.children[7].scale.set(1.2, 1.2, 1.2); // let stoiki
                }
                
                scene.add(GltfMeshArray);

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