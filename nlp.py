import sys
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity

t1=sys.argv[1]
t2=sys.argv[2]

vec=TfidfVectorizer()

mat=vec.fit_transform([t1,t2])

sim=cosine_similarity(mat[0],mat[1])

print(sim[0][0])