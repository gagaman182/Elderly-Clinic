<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title> การคัดกรองโรคข้อเข่าเสื่อมทางคลินิก </v-card-title>
          <v-card-subtitle>
            แบบคัดกรองโรคข้อเข่าเสื่อมทางคลินิกใช้ประเมินผู้สูงอายุที่มีอาการปวดเข่าเพื่อค้นหาโอกาสที่จะเป็นโรค
            ข้อเข่าเสื่อมและส่งต่อแพทย์เพื่อตรวจวินิจฉัยและทำการรักษา
          </v-card-subtitle>
          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            ถ้าผู้สูงอายุมีอาการ “ปวดเข่า” และตอบว่า “ใช่” 2 ข้อ ถือว่า
            มีโอกาสที่จะเป็นโรคข้อเข่าเสื่อม<br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- --------1--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                1. ข้อเข่าฝืดตึงหลังตื่นนอนตอนเช้านาน <30 นาที(stiffness)
              </h3>
              <v-radio-group v-model="knee_screen1" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
          </v-row>
          <!-- --------2--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                2. เสียงดังกรอบแกรบในข้อเข่าขณะเคลื่อนไหว (crepitus)
              </h3>
              <v-radio-group v-model="knee_screen2" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
          </v-row>
          <!-- --------3--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                3. กดเจ็บที่กระดูกข้อเข่า (bony tenderness)
              </h3>
              <v-radio-group v-model="knee_screen3" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
          </v-row>
          <!-- --------4--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                4. ข้อใหญ่ผิดรูป (bony enlargement)
              </h3>
              <v-radio-group v-model="knee_screen4" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
          </v-row>
          <!-- --------5--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                5. ไม่พบข้ออุ่น (no palpable warmth)
              </h3>
              <v-radio-group v-model="knee_screen5" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
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
        </v-card-text>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: 'Knee-Screen',
  data() {
    return {
      knee_screen1: '',
      knee_screen2: '',
      knee_screen3: '',
      knee_screen4: '',
      knee_screen5: '',
    }
  },
  computed: {
    total: function () {
      if (
        !this.knee_screen1 ||
        !this.knee_screen2 ||
        !this.knee_screen3 ||
        !this.knee_screen4 ||
        !this.knee_screen5
      )
        return 0
      return (
        parseInt(this.knee_screen1) +
        parseInt(this.knee_screen2) +
        parseInt(this.knee_screen3) +
        parseInt(this.knee_screen4) +
        parseInt(this.knee_screen5)
      )
    },
    result: function () {
      if (this.total == 0) return 'ปกติ'
      else if (this.total >= 1 && this.total < 2) return 'ปกติ '
      else if (this.total >= 2) return 'มีโอกาสที่จะเป็นโรคข้อเข่าเสื่อม '
    },
  },
}
</script>
