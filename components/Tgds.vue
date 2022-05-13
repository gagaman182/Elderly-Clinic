<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title>
            แบบวัดความเศร้าในผู้สูงอายุไทย 15 ข้อ (TGDS-15)
          </v-card-title>
          <v-card-subtitle
            >เลือกคำตอบที่ตรงกับความรู้สึกของคุณ ในช่วง 1
            สัปดาห์ที่ผ่านมา</v-card-subtitle
          >
          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            ให้คะแนน 1 คะแนนในข้อต่อไปนี้<br />
            ตอบ ใช่ 2-4, 6, 8-10, 12, 14-15<br />
            ตอบ ไม่ใช่ 1, 5, 7, 11, 13 <br />
            - 6 คะแนนขึ้นไปบ่งบอกว่ามีภาวะซึมเศร้า <br />
            - 11 คะแนนขึ้นไปมีภาวะซึมเศร้าแน่นอน <br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- --------1--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                1. โดยทั่วไปแล้วคุณพึงพอใจกับ ชีวิต ตัวเองหรือไม่
              </h3>
              <v-radio-group v-model="tgds1" row>
                <v-radio label="ใช่" value="0"></v-radio>
                <v-radio label="ไม่ใช่" value="1"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds1 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------2--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                2. คุณลดกิจกรรมหรือความสนใจในสิ่งต่างๆลงหรือไม่
              </h3>
              <v-radio-group v-model="tgds2" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds2 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------3--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                3. คุณรู้สึกว่าชีวิตคุณว่างเปล่าหรือไม่
              </h3>
              <v-radio-group v-model="tgds3" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds3 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------4--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                4. คุณรู้สึกเบื่อๆ อยู่บ่อยครั้งหรือไม่
              </h3>
              <v-radio-group v-model="tgds4" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds4 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------5--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">5. คุณอารมณ์ดีเป็นส่วนใหญ่ หรือไม่</h3>
              <v-radio-group v-model="tgds5" row>
                <v-radio label="ใช่" value="0"></v-radio>
                <v-radio label="ไม่ใช่" value="1"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds5 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------6--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                6. คุณกลัวว่าอะไรร้ายๆ จะเกิดขึ้นกับคุณหรือไม่
              </h3>
              <v-radio-group v-model="tgds6" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds6 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------7--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                7. คุณรู้สึกมีความสุขเป็นส่วนใหญ่หรือไม่
              </h3>
              <v-radio-group v-model="tgds7" row>
                <v-radio label="ใช่" value="0"></v-radio>
                <v-radio label="ไม่ใช่" value="1"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds7 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------8--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                8. คุณรู้สึกหมดหนทางอยู่บ่อยครั้งหรือไม่
              </h3>
              <v-radio-group v-model="tgds8" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds8 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------9--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                9. คุณชอบอยู่กับบ้านมากกว่าออกไปหาอะไรทำนอกบ้านหรือไม่
              </h3>
              <v-radio-group v-model="tgds9" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds9 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------10--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                10. คุณรู้สึกว่าคุณมีปัญหาความจำมากกว่า ใครๆหรือไม่
              </h3>
              <v-radio-group v-model="tgds10" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds10 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------11--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                11.
                คุณคิดว่าการที่มีชีวีติอยู่มาได้จนถึงทุกวันนี้มันช่างแสนวิเศษใช่หรือไม่
              </h3>
              <v-radio-group v-model="tgds11" row>
                <v-radio label="ใช่" value="0"></v-radio>
                <v-radio label="ไม่ใช่" value="1"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds11 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------12--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                12.
                คุณรู้สึกหรือไม่ว่าชีวิตที่กำลังเป็นอยู่ตอนนี้ช่างไร้ค่าเหลือเกิน
              </h3>
              <v-radio-group v-model="tgds12" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds12 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------13--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">13. คุณรู้สึกมีกำลังเต็มที่หรือไม่</h3>
              <v-radio-group v-model="tgds13" row>
                <v-radio label="ใช่" value="0"></v-radio>
                <v-radio label="ไม่ใช่" value="1"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds13 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------14--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                14. คุณรู้สึกหมดหวังกับสิ่งที่คุณกำลังเผชิญอยู่หรือไม่
              </h3>
              <v-radio-group v-model="tgds14" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds14 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------15--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                15. คุณคิดว่าคนอื่นๆ ดีกว่าคุณหรือไม่
              </h3>
              <v-radio-group v-model="tgds15" row>
                <v-radio label="ใช่" value="1"></v-radio>
                <v-radio label="ไม่ใช่" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ tgds15 }}</span>
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
            <v-col cols="12" md="4">
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
  name: 'Tgds',
  data() {
    return {
      tgds1: '',
      tgds2: '',
      tgds3: '',
      tgds4: '',
      tgds5: '',
      tgds6: '',
      tgds7: '',
      tgds8: '',
      tgds9: '',
      tgds10: '',
      tgds11: '',
      tgds12: '',
      tgds13: '',
      tgds14: '',
      tgds15: '',
    }
  },
  computed: {
    total: function () {
      if (
        !this.tgds1 ||
        !this.tgds2 ||
        !this.tgds3 ||
        !this.tgds4 ||
        !this.tgds5 ||
        !this.tgds6 ||
        !this.tgds7 ||
        !this.tgds8 ||
        !this.tgds9 ||
        !this.tgds10 ||
        !this.tgds11 ||
        !this.tgds12 ||
        !this.tgds13 ||
        !this.tgds14 ||
        !this.tgds15
      )
        return 0
      return (
        parseInt(this.tgds1) +
        parseInt(this.tgds2) +
        parseInt(this.tgds3) +
        parseInt(this.tgds4) +
        parseInt(this.tgds5) +
        parseInt(this.tgds6) +
        parseInt(this.tgds7) +
        parseInt(this.tgds8) +
        parseInt(this.tgds9) +
        parseInt(this.tgds10) +
        parseInt(this.tgds11) +
        parseInt(this.tgds12) +
        parseInt(this.tgds13) +
        parseInt(this.tgds14) +
        parseInt(this.tgds15)
      )
    },
    result: function () {
      if (this.total >= 6 && this.total < 11) return 'บ่งบอกว่ามีภาวะซึมเศร้า '
      else if (this.total >= 11) return 'มีภาวะซึมเศร้าแน่นอน'
      else if (this.total < 6) return '-'
    },
  },
}
</script>
