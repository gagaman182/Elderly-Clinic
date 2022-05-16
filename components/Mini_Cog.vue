<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title> Mini-Cog </v-card-title>

          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            ≤3 คะแนน มีภาวะการรู้คิดบกพร่อง <br />
            >3 คะแนน ปกติ<br />
            * คะแนนเต็ม 5 คะแนน (ข้อ 1 = ไม่มีคะแนน, ข้อ 2 = 2 คะแนน ,ข้อ 3 = 3
            คะแนน )*
            <br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- --------1--------- -->
          <v-row>
            <v-col cols="12" md="11">
              <h3 class="textlabel mb-2">
                1. Three Word Registration ผู้ทดสอบบอกผู้ถูกทดสอบว่า
                “ให้ตั้งใจฟังดีๆ เดี๋ยวจะบอกคำ 3 คำ เมื่อพูดจบ
                แล้วให้พูดตามและจำไว้ เดี๋ยวจะกลับมาถามซ้ำ”
              </h3>
              <v-checkbox
                v-model="minicog1_1"
                label="หลานสาว"
                value="1"
              ></v-checkbox>
              <v-checkbox
                v-model="minicog1_2"
                label="สวรรค์"
                value="1"
              ></v-checkbox>
              <v-checkbox
                v-model="minicog1_3"
                label="ภูเขา"
                value="1"
              ></v-checkbox>
            </v-col>
            <!-- <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ minicog1 }}</span>
              </v-avatar>
            </v-col> -->
          </v-row>
          <!-- ------------2------------- -->
          <v-row>
            <v-col cols="12" md="12">
              <v-divider />
            </v-col>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                2. Clock Drawing
                ให้ผู้ถูกทดสอบวาดรูปนาฬิกาโดยใส่ตัวเลขและเข็มนาฬิกาที่เวลา 11.10
                น.
              </h3>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ minicog2 }}</span>
              </v-avatar>
            </v-col>
            <v-col cols="12" md="6">
              <v-text-field
                outlined
                dense
                label="คลิกช่องเพื่อเลือกรูปภาพ"
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
              <img :src="imageUrl" height="600" width="800" v-if="imageUrl" />
              <!-- <button type="button" @click="uploadFile">Upload file</button> -->
            </v-col>
            <v-col cols="12" md="6">
              <v-btn
                dark
                rounded
                color="#E04DB0"
                type="button"
                @click="uploadFile"
                >อัพโหลดรูป</v-btn
              >
            </v-col>

            <v-col cols="12" md="10">
              <v-radio-group v-model="minicog2" row>
                <v-radio label="ได้คะแนน" value="2"></v-radio>
                <v-radio label="ไม่ได้คะแนน " value="0"></v-radio>
              </v-radio-group>
            </v-col>
          </v-row>

          <!-- --------3--------- -->
          <v-row>
            <v-col cols="12" md="12">
              <v-divider />
            </v-col>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                3. Three Word Recall ให้ผู้ถูกทดสอบบอกคำ 3
                คำที่ให้จำเมื่อสักครู่ว่ามีอะไรบ้าง
              </h3>
              <v-checkbox
                v-model="minicog3_1"
                label="หลานสาว"
                value="1"
              ></v-checkbox>
              <v-checkbox
                v-model="minicog3_2"
                label="สวรรค์"
                value="1"
              ></v-checkbox>
              <v-checkbox
                v-model="minicog3_3"
                label="ภูเขา"
                value="1"
              ></v-checkbox>
            </v-col>

            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ minicog3 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="10"
              ><h3 class="textlabel text-h4 mb-2">รวมคะแนน</h3>
            </v-col>
            <v-col cols="12" md="2">
              <v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ total | json }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <v-row>
            <v-col cols="12" md="3"
              ><h3 class="textlabel text-h4 mb-2">ผลการประเมิน</h3>
            </v-col>
            <v-col cols="12" md="6">
              <v-chip class="white--text text-h4" color="#79DAE8">
                {{ result }}
              </v-chip>
            </v-col>
          </v-row>
          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn
                  rounded
                  color="#6A67CE"
                  x-large
                  dark
                  @click="save_minicog"
                >
                  <v-icon>mdi-content-save-move </v-icon>
                  <h4>บันทึก</h4>
                </v-btn>
              </div>
            </v-col>
          </v-row>
        </v-card-text>
      </v-card>
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
      cid: '3901101272704',
      minicog1_1: '',
      minicog1_2: '',
      minicog1_3: '',
      minicog2: '',

      minicog3_1: '0',
      minicog3_2: '0',
      minicog3_3: '0',
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
      if (!this.imageFile) {
        alert('no pic')
      } else {
        let formData = new FormData()
        formData.append('file', this.imageFile)
        formData.append('cid', this.cid)
        axios
          .post(`${this.$axios.defaults.baseURL}uploads/upload.php`, formData, {
            headers: {
              'Content-Type': 'multipart/form-data',
            },
            cid: this.cid,
          })
          .then(function (response) {
            if (!response.data) {
              alert('File not uploaded.')
            } else {
              alert(response.data)
            }
          })
          .catch(function (error) {
            console.log(error)
          })
      }
    },
    save_minicog() {},
  },
  computed: {
    minicog3: function () {
      if (!this.minicog3_1 || !this.minicog3_2 || !this.minicog3_3) return 0
      return (
        parseInt(this.minicog3_1) +
        parseInt(this.minicog3_2) +
        parseInt(this.minicog3_3)
      )
    },
    total: function () {
      // if (!this.minicog2 || !this.minicog3) return 0
      // if (!this.minicog3) return 0
      if (!this.minicog2) return parseInt(this.minicog3)
      else if (!this.minicog3) return parseInt(this.minicog2)

      return parseInt(this.minicog2) + parseInt(this.minicog3)
    },
    result: function () {
      if (this.total >= 1 && this.total <= 3) return 'มีภาวะการรู้คิดบกพร่อง'
      else if (this.total > 3) return 'ปกติ'
      else if (this.total == 0) return '-'
    },
  },
}
</script>
