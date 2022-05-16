<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title> การคัดกรองภาวะเปราะบาง (FRAIL scale) </v-card-title>
          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            - ถ้ามีตั้งแต่ 3 ข้อขึ้นไป ถือว่า มีภาวะเปราะบาง<br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- --------1--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                1. ในช่วง 4 สัปดาห์ที่ผ่านมา ท่านรู้สึกอ่อนเพลียบ่อยมากแค่ไหน
              </h3>
              <v-radio-group v-model="frail1">
                <v-radio label="ตลอดเวลา" value="1.1"></v-radio>
                <v-radio label="เกือบตลอดเวลา" value="1.2"></v-radio>
                <v-radio label="บางเวลา" value="0.1"></v-radio>
                <v-radio label="ส่วนน้อย" value="0.2"></v-radio>
                <v-radio label="ไม่เคยเลย" value="0.3"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ frail1_ok }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------2--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                2. เวลาท่านเดินขึ้นบันได 10 ขั้นด้วยตัวเองโดยไม่หยุดพัก
                และไม่ใช่อุปกรณ์ช่วย ท่านมีปัญหาหรือไม่
              </h3>
              <v-radio-group v-model="frail2">
                <v-radio label="ไม่มี" value="0"></v-radio>
                <v-radio label="มี" value="1"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ frail2 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------3--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                3. เวลาท่านเดิน 300-400 เมตรดวยตัวเองโดยไม่หยุดพัก
                และไม่ใช่อุปกรณ์ช่วย ท่านมีปัญหาหรือไม่
              </h3>
              <v-radio-group v-model="frail3">
                <v-radio label="ไม่มี" value="0"></v-radio>
                <v-radio label="มี" value="1"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ frail3 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------4--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                4. แพทย์เคยแจ้งว่าท่านมีโรคต่างๆ เหล่านี้หรือไม่
              </h3>
              <!-- <v-radio-group v-model="frail4">
                <v-radio label="โรคความดันโลหิตสูง" value="0.1"></v-radio>
                <v-radio label="โรคเบาหวาน" value="0.2"></v-radio>
                <v-radio
                  label="โรคมะเร็ง (ไม่รวมมะเร็งผิวหนัง)"
                  value="0.3"
                ></v-radio>
                <v-radio label="โรคปอดเรื้อรัง" value="0.4"></v-radio>
                <v-radio label="โรคหลอดเลือดหัวใจกำเริบ" value="1.1"></v-radio>
                <v-radio label="ภาวะหัวใจวาย" value="1.2"></v-radio>
                <v-radio label="โรคหอบหืด" value="1.3"></v-radio>
                <v-radio
                  label="อาการแน่นหน้าอกจากโรคหลอดเลือดหัวใจ"
                  value="1.4"
                ></v-radio>
                <v-radio label="ภาวะข้ออักเสบ" value="1.5"></v-radio>
                <v-radio label="โรคหลอดเลือดสมอง" value="1.6"></v-radio>
                <v-radio label="โรคไต" value="1.7"></v-radio>
              </v-radio-group> -->
              <v-checkbox
                v-model="frail4_1"
                label="โรคความดันโลหิตสูง"
                value="0.1"
              ></v-checkbox>
              <v-checkbox
                v-model="frail4_2"
                label="โรคเบาหวาน"
                value="0.2"
              ></v-checkbox>
              <v-checkbox
                v-model="frail4_3"
                label="โรคมะเร็ง (ไม่รวมมะเร็งผิวหนัง)"
                value="0.3"
              ></v-checkbox>
              <v-checkbox
                v-model="frail4_4"
                label="โรคปอดเรื้อรัง"
                value="0.4"
              ></v-checkbox>
              <v-checkbox
                v-model="frail4_5"
                label="โรคหลอดเลือดหัวใจกำเริบ"
                value="1.1"
              ></v-checkbox>
              <v-checkbox
                v-model="frail4_6"
                label="ภาวะหัวใจวาย"
                value="1.2"
              ></v-checkbox>
              <v-checkbox
                v-model="frail4_7"
                label="โรคหอบหืด"
                value="1.3"
              ></v-checkbox>
              <v-checkbox
                v-model="frail4_8"
                label="อาการแน่นหน้าอกจากโรคหลอดเลือดหัวใจ"
                value="1.4"
              ></v-checkbox>
              <v-checkbox
                v-model="frail4_9"
                label="ภาวะข้ออักเสบ"
                value="1.5"
              ></v-checkbox>
              <v-checkbox
                v-model="frail4_10"
                label="โรคหลอดเลือดสมอง"
                value="1.6"
              ></v-checkbox>
              <v-checkbox
                v-model="frail4_11"
                label="โรคไต"
                value="1.7"
              ></v-checkbox>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ frail4_ok }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- --------5--------- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">
                5. ปัจจุบันท่านหนักเท่าไหร่ (ชั่งน้ำหนักโดยไม่สวมรองเท้า)
              </h3>
              <v-row>
                <v-col cols="12" md="5">
                  <h5 class="textlabel mb-2">น้ำหนักปัจจุบัน</h5>
                  <v-text-field
                    solo
                    v-model="frail5_weight1"
                    outlined
                    dense
                    type="number"
                  />
                </v-col>
                <v-col cols="12" md="5">
                  <h5 class="textlabel mb-2">1 ปีก่อนหน้านี้</h5>
                  <v-text-field
                    solo
                    v-model="frail5_weight2"
                    outlined
                    dense
                    type="number"
                  />
                </v-col>
              </v-row>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ frail5 }}</span>
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
            <v-col cols="12" md="3">
              <v-chip class="white--text text-h4" color="#79DAE8">
                {{ result }}
              </v-chip>
            </v-col>
          </v-row>
          <v-row
            ><v-col cols="12">
              <div class="text-center">
                <v-btn rounded color="#6A67CE" x-large dark @click="save_frail">
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
  name: 'Frail-Scale',
  data() {
    return {
      frail1: '',
      frail2: '',
      frail3: '',
      frail4_1: '',
      frail4_2: '',
      frail4_3: '',
      frail4_4: '',
      frail4_5: '',
      frail4_6: '',
      frail4_7: '',
      frail4_8: '',
      frail4_9: '',
      frail4_10: '',
      frail4_11: '',
      frail5_weight1: '',
      frail5_weight2: '',
    }
  },
  computed: {
    frail1_ok: function () {
      if (this.frail1 == '0.1' || this.frail1 == '0.2' || this.frail1 == '0.3')
        return '0'
      else if (this.frail1 == 1.1 || this.frail1 == 1.2) return '1'
    },
    frail4_ok: function () {
      if (
        this.frail4_5 == '1.1' ||
        this.frail4_6 == '1.2' ||
        this.frail4_7 == '1.3' ||
        this.frail4_8 == '1.4' ||
        this.frail4_9 == '1.5' ||
        this.frail4_10 == '1.6' ||
        this.frail4_11 == '1.7'
      )
        return '1'
      else if (
        this.frail4_1 == '0.1' ||
        this.frail4_2 == '0.2' ||
        this.frail4_3 == '0.3' ||
        this.frail4_4 == '0.4'
      )
        return '0'
    },
    frail5: function () {
      if (parseInt(this.frail5_weight1) > parseInt(this.frail5_weight2)) {
        return '0'
      } else {
        if (
          ((parseInt(this.frail5_weight2) - parseInt(this.frail5_weight1)) /
            parseInt(this.frail5_weight2)) *
            100 <
          5
        )
          return '0'
        else if (
          ((parseInt(this.frail5_weight2) - parseInt(this.frail5_weight1)) /
            parseInt(this.frail5_weight2)) *
            100 >
          5
        )
          return '1'
      }
    },
    total: function () {
      if (
        !this.frail1_ok ||
        !this.frail2 ||
        !this.frail3 ||
        !this.frail4_ok ||
        !this.frail5
      )
        return 0
      return (
        parseInt(this.frail1_ok) +
        parseInt(this.frail2) +
        parseInt(this.frail3) +
        parseInt(this.frail4_ok) +
        parseInt(this.frail5)
      )
    },
    result: function () {
      if (this.total >= 3) return 'มีภาวะเปราะบาง'
      else if (this.total < 3) {
        return '-'
      }
    },
  },
  methods: {
    save_frail() {},
  },
}
</script>
