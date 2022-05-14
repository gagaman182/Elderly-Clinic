<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <!-- <v-file-input
        @change="Preview_image"
        v-model="image"
        outlined
        dense
        accept=".jpeg,.jpg,.png,image/jpeg,image/png"
     
      >
      </v-file-input>
      <v-btn @click="upload_photo">upload </v-btn> -->

      <v-img :src="show"></v-img>
      <input type="file" id="file" ref="file" onchange="loadFile(event)" />

      <button type="button" @click="uploadFile()">Upload file</button>
    </v-col>
  </v-row>
</template>

<script>
import axios from 'axios'
export default {
  name: 'Mini-Cog',
  data() {
    return {
      image: '',
      photo: '',
      file: '',
      show: '',
    }
  },
  methods: {
    // Preview_image() {
    //   this.url = URL.createObjectURL(this.image)
    // },
    loadFile(event) {
      this.url = URL.createObjectURL(event.target.files[0])
    },
    uploadFile: function () {
      this.file = this.$refs.file.files[0]

      let formData = new FormData()
      formData.append('file', this.file)

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
