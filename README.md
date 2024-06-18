# Web1
Web_Test_2022

1)https://github.com/icodedecoi/Web1

2)Transfer VGG Address:

import pathlib
import matplotlib.pyplot as plt
import tensorflow as tf

dataset_url = "https://storage.googleapis.com/download.tensorflow.org/example_images/flower_photos.tgz"
data_dir = tf.keras.utils.get_file(origin=dataset_url,fname='flower_photos',untar=True)
data_dir = pathlib.Path(data_dir)

