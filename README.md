1)https://github.com/icodedecoi/Web1

2)Transfer VGG Address:
import pathlib
import matplotlib.pyplot as plt
import tensorflow as tf

dataset_url = "https://storage.googleapis.com/download.tensorflow.org/example_images/flower_photos.tgz"
data_dir = tf.keras.utils.get_file(origin=dataset_url,
                                   fname='flower_photos',
                                   untar=True)
data_dir = pathlib.Path(data_dir)

3)starGAN

!pip install nnabla-ext-cuda120  
!git clone https://github.com/sony/nnabla-examples.git

!wget -O /content/man.png https://raw.githubusercontent.com/Lilcob/test_colab/main/man.png

%run nnabla-examples/interactive-demos/colab_utils.py

%cd nnabla-examples/image-translation/stargan

!wget https://nnabla.org/pretrained-models/nnabla-examples/GANs/stargan/pretrained_params_on_celebA.h5
!wget https://nnabla.org/pretrained-models/nnabla-examples/GANs/stargan/pretrained_conf_on_celebA.json

def download_and_unzip_dlib_model():  
    !wget http://dlib.net/files/mmod_human_face_detector.dat.bz2
    !bzip2 -d mmod_human_face_detector.dat.bz2

def detect_face(image_path):  
    image = io.imread(image_path)
    if image.ndim == 2:
        image = color.gray2rgb(image)
    elif image.shape[-1] == 4:
        image = image[..., :3]
    face_detector = dlib.cnn_face_detection_model_v1("mmod_human_face_detector.dat")
    detected_faces = face_detector(cv2.cvtColor(image[..., ::-1].copy(), cv2.COLOR_BGR2GRAY))
    detected_faces = [[d.rect.left(), d.rect.top(), d.rect.right(), d.rect.bottom()] for d in detected_faces]
    assert len(detected_faces) == 1, "Warning: only one face should be contained."
    detected_faces = detected_faces[0]
    return detected_faces, image

def generate_new_image():
    !python generate.py --pretrained-params pretrained_params_on_celebA.h5 --config pretrained_conf_on_celebA.json --test-image-path source_img
    generated_img = sorted(glob.glob(os.path.join("tmp.results/*.png")), key=os.path.getmtime)[-1]
    return generated_img

