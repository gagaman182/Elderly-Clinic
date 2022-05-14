<!-- Please remove this file from your project -->
<template>
  <v-row>
    <v-col>
      <v-card>
        <v-card-text>
          <v-card-title>
            Thai Falls Risk Assessment test (Thai-FRAT)
          </v-card-title>

          <v-divider />
          <v-alert
            dense
            color="#EEF3D2"
            icon="mdi-bullhorn-variant-outline"
            border="left"
            class="text-h6"
          >
            เกณฑ์การประเมิน <br />
            คะแนนรวมตั้งแต่ 4 คะแนนขึ้นไป หมายถึง มีความเสี่ยงต่อภาวะหกล้ม<br />
          </v-alert>
        </v-card-text>
        <v-card-text>
          <!-- ----1----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">1. เพศ</h3>
              <v-radio-group v-model="frat1">
                <v-radio label="หญิง" value="1"></v-radio>
                <v-radio label="ชาย" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ frat1 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----2----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">2. การมองเห็นบกพร่อง</h3>
              <v-radio-group v-model="frat2">
                <v-radio
                  label="ไม่สามารถอ่านตัวเลขที่ระยะ 6/12 เมตรได้มากกว่าครึ่ง"
                  value="1"
                ></v-radio>
                <v-radio
                  label="อ่านตัวเลขที่ระยะ 6/12 เมตรได้มากกว่าครึ่ง"
                  value="0"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ frat2 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----3----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">3. การทรงตัวบกพร่อง</h3>
              <v-radio-group v-model="frat3">
                <v-radio
                  label="ยืนต่อเท้าเป็นเส้นตรงไม่ได้ หรือยืนได้ไม่ถึง  10 วินาที"
                  value="1"
                ></v-radio>
                <v-radio
                  label="ยืนต่อเท้าเป็นเส้นตรงได้นาน  10  วินาที"
                  value="0"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ frat3 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----4----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">4. การใช้ยา</h3>
              <v-radio-group v-model="frat4">
                <v-radio
                  label="กินยาต่อไปนี้ตั้งแต่ 1 ชนิดขึ้นไป ได้แก่ ยานอนหลับ ยากล่อม
    ประสาท ยาลดความดันโลหิต  ยาขับปัสสาวะหรือกินยาชนิดใด ก็
    ได้ตั้งแต่ 4 ชนิดขึ้นไป (ไม่รวมวิตามิน)
"
                  value="1"
                ></v-radio>
                <v-radio
                  label="ไม่กินยาต่อไปนี้ ได้แก่ ยานอนหลับ ยากล่อมประสาท ยาลดความ
    ดันโลหิต  ยาขับปัสสาวะหรือกินยาชนิดใด ก็ได้แต่น้อยกว่า  4
    ชนิด
"
                  value="0"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ frat4 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----5----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">5. ประวัติการหกล้ม</h3>
              <v-radio-group v-model="frat5">
                <v-radio
                  label="มีประวัติหกล้มตั้งแต่ 2 ครั้งขึ้นไปในรอบ 6 เดือนที่ผ่านมา"
                  value="1"
                ></v-radio>
                <v-radio label="ไม่มีประวัติการหกล้ม" value="0"></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ frat5 }}</span>
              </v-avatar>
            </v-col>
          </v-row>
          <!-- ----6----- -->
          <v-row>
            <v-col cols="12" md="10">
              <h3 class="textlabel mb-2">6. สภาพบ้านที่อยู่อาศัย</h3>
              <v-radio-group v-model="frat6">
                <v-radio
                  label="อยู่บ้านยกพื้นสูงตั้งแต่  1.5 เมตรขึ้นไป"
                  value="1"
                ></v-radio>
                <v-radio
                  label="ไม่ได้อยู่บ้านยกพื้นสูงตั้งแต่  1.5 เมตรขึ้นไป"
                  value="0"
                ></v-radio>
              </v-radio-group>
            </v-col>
            <v-col cols="12" md="2"
              ><v-avatar color="#79DAE8" size="62">
                <span class="white--text text-h5">{{ frat6 }}</span>
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
  name: 'Thai-Frat',
  data() {
    return {
      frat1: '',
      frat2: '',
      frat3: '',
      frat4: '',
      frat5: '',
      frat6: '',
    }
  },
  computed: {
    total: function () {
      if (
        !this.frat1 ||
        !this.frat2 ||
        !this.frat3 ||
        !this.frat4 ||
        !this.frat5 ||
        !this.frat6
      )
        return 0
      return (
        parseInt(this.frat1) +
        parseInt(this.frat2) +
        parseInt(this.frat3) +
        parseInt(this.frat4) +
        parseInt(this.frat5) +
        parseInt(this.frat6)
      )
    },
    result: function () {
      if (this.total < 4) return '-'
      else if (this.total >= 4) return 'มีความเสี่ยงต่อภาวะหกล้ม'
    },
  },
}
</script>
