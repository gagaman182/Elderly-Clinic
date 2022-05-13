<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title>
            Modified Mini Sarcopenia Risk Assessment-5
          </v-card-title>
          <v-card-subtitle>(Modified MSRA-5)</v-card-subtitle>
          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            คะแนน ≤30 คะแนน ถือว่า มีความเสี่ยงต่อภาวะมวลกล้ามเนื้อน้อย<br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- ----1----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">1. คุณอายุเท่าไหร่</h3>
              <v-radio-group v-model="msra1">
                <v-radio label="มากกว่าหรือเท่ากับ 70 ปี " value="0"></v-radio>
                <v-radio label="น้อยกว่า 70 ปี" value="5"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ msra1 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----2----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                2. คุณได้รับการรักษาโดยการนอนโรงพยาบาลในช่วงปีที่ผ่านมาหรือไม่
              </h3>
              <v-radio-group v-model="msra2">
                <v-radio
                  label="รับการรักษาและมากกว่า 1 ครั้ง "
                  value="0"
                ></v-radio>
                <v-radio
                  label="รับการรักษาเพียงครั้งเดียว "
                  value="1"
                ></v-radio>
                <v-radio
                  label="ไม่ได้รับการรักษาในโรงพยาบาล "
                  value="2"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ msra2 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----3----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                3. ข้อใดเป็นระดับในการทำกิจกรรมของคุณ
              </h3>
              <v-radio-group v-model="msra3">
                <v-radio
                  label="ฉันสามารถเดินได้น้อยกว่า 1,000 เมตร (1 กิโลเมตร) "
                  value="0"
                ></v-radio>
                <v-radio
                  label="ฉันสามารถเดินได้มากกว่า 1,000 เมตร (1 กิโลเมตร) "
                  value="15"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ msra3 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----4----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                4. คุณรับประทานอาหาร 3 มื้อเป็นประจำหรือไม่
              </h3>
              <v-radio-group v-model="msra4">
                <v-radio
                  label="ไม่ ฉันข้ามอาหารบางมื้อตั้งแต่  2  ครั้งต่อสัปดาห์ขึ้นไป  (เช่น ฉันไม่ 
     รับประทาน อาหารเช้า หรือรับประทานเพียงกาแฟผสมนม หรือซุปสำหรับมื้อเย็น"
                  value="0"
                ></v-radio>
                <v-radio
                  label="รับประทานอาหาร  3  มื้อเป็นประจำ "
                  value="2"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ msra4 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----5----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                5. คุณน้ำหนักลดลงในช่วง 1 ปีที่ผ่านมาหรือไม่
              </h3>
              <v-radio-group v-model="msra5">
                <v-radio label="ลดลงมากกว่า 2 กิโลกรัม" value="0"></v-radio>
                <v-radio
                  label="ลดลงน้อยกว่าหรือเท่ากับ 2 กิโลกรัม "
                  value="10"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ msra5 }}</span>
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
                <v-btn rounded color="#6A67CE" x-large dark @click="save_regis">
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
export default {
  name: 'Msra',
  data() {
    return {
      msra1: '',
      msra2: '',
      msra3: '',
      msra4: '',
      msra5: '',
    }
  },
  computed: {
    total: function () {
      if (
        !this.msra1 ||
        !this.msra2 ||
        !this.msra3 ||
        !this.msra4 ||
        !this.msra5
      )
        return 0
      return (
        parseInt(this.msra1) +
        parseInt(this.msra2) +
        parseInt(this.msra3) +
        parseInt(this.msra4) +
        parseInt(this.msra5)
      )
    },
    result: function () {
      if (this.total >= 1 && this.total <= 30)
        return 'ความเสี่ยงต่อภาวะมวลกล้ามเนื้อน้อย'
      else if (this.total > 30) return 'ปกติ'
      else if (this.total == 0) return '-'
    },
  },
}
</script>
