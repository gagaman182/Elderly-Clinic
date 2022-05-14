<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <img :src="imageUrl" height="400" width="600" v-if="imageUrl" />
      <v-text-field
        label="Select Image"
        @click="pickFile"
        v-model="imageName"
        prepend-icon="mdi-file-image"
      ></v-text-field>
      <input
        type="file"
        style="display: none"
        ref="image"
        accept="image/jpeg, image/jpg, image/png"
        @change="onFilePicked"
      />
      <button type="button" @click="uploadFile">Upload file</button>
      {{ this.imageFile }}
    </v-col>
  </v-row>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Mini-Cog',
  data() {
    return {
      imageUrl: '',
      imageFile: null,
      imageName: '',
    }
  },
  methods: {
    pickFile() {
      this.$refs.image.click()
    },
    onFilePicked(e) {
      const files = e.target.files
      if (files[0] !== undefined) {
        this.imageName = files[0].name
        if (this.imageName.lastIndexOf('.') <= 0) {
          return
        }
        const fr = new FileReader()
        fr.readAsDataURL(files[0])
        fr.addEventListener('load', () => {
          this.imageUrl = fr.result
          this.imageFile = files[0]
        })
      } else {
        this.imageName = ''
        this.imageFile = ''
        this.imageUrl = ''
      }
    },
    uploadFile() {
      let formData = new FormData()
      formData.append('file', this.imageFile)

      axios
        .post(`${this.$axios.defaults.baseURL}uploads/upload.php`, formData, {
          headers: {
            'Content-Type': 'multipart/form-data',
          },
        })
        .then(function (response) {
          if (!response.data) {
            alert('File not uploaded.')
          } else {
            alert('File uploaded successfully.')
          }
        })
        .catch(function (error) {
          console.log(error)
        })
    },
  },
}
</script>
