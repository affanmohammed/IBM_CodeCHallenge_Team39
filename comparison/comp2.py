
import cv2
import numpy as np

image = cv2.imread(args["image1.jpg"])
rgb = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)

boxes = face_recognition.face_locations(rgb, model=args["detection_method"])
encodings1 = face_recognition.face_encodings(rgb, boxes)
 	

image = cv2.imread(args["image2.jpg"])
rgb = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)

boxes = face_recognition.face_locations(rgb, model=args["detection_method"])
encodings2 = face_recognition.face_encodings(rgb, boxes)



matches = face_recognition.compare_faces(encoding1, encoding2)