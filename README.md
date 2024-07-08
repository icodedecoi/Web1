1)https://github.com/icodedecoi/Web1

2)Transfer VGG address:
import pathlib
import matplotlib.pyplot as plt
import tensorflow as tf

dataset_url = "https://storage.googleapis.com/download.tensorflow.org/example_images/flower_photos.tgz"
data_dir = tf.keras.utils.get_file(origin=dataset_url,
                                   fname='flower_photos',
                                   untar=True)
data_dir = pathlib.Path(data_dir)

3)Efficientnet down addrress
!gdown 1WI3FPChY3DFnrNEP3Fk_C61bcMxkr4-b



def generate_new_image():

    !python generate.py --pretrained-params pretrained_params_on_celebA.h5 --config pretrained_conf_on_celebA.json --test-image-path source_img
    generated_img = sorted(glob.glob(os.path.join("tmp.results/*.png")), key=os.path.getmtime)[-1]
    return generated_img

